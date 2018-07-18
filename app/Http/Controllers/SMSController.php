<?php

namespace App\Http\Controllers;

use App\SMS;
use App\Transaction;
use App\User;

use GuzzleHttp\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SMSController extends Controller
{
    //
    function home()
    {
        return new HomeController();
    }

    public function alertUser($user, $amt)
    {
        $message = "Hi " . $user->first_name
            . "\nYou have $amt SMS Units balance remaining. You can log in to your dashboard at https://bit.ly/2HRWEuE, to buy more units.\nGreenWhite";
        $this->sendSMS('greenwhitedev', config('app.name'),
            $user->phone_no, $message,
            config('app.url'));
        // drg>> user alert
        $user = User::find($user->id);
        $user->alert = true;
        $user->save();
    }

    public function bulksms(Request $request)
    {
        $secret = Auth::user()->secret;
        $from = $request->from;
        $to = $request->to;
        $message = $request->message;
        $user = User::where('secret', $secret)->first();
        if ($user) {
            $domain = $request->getClientIp();
            $checkUnits = $this->checkUnits($user, -1000);
            if ($checkUnits) {
                echo $checkUnits;
                $result = $this->sendSMS($secret, $from, $to, $message,
                    $domain);
                $amt = $this->checkUnits($user);
                return redirect()->back()
                    ->with('status', 'Your message has been sent')
                    ->with('state', 'success');
            }
        }
        return redirect()->back()
            ->with('status', 'Sorry, your message was not sent.')
            ->with('state', 'error');
    }


    public function checkUnits($user, $amt = null)
    {
        $sent = SMS::where('secret', $user->secret)->sum('units');
        $bought = Transaction::where([
            [
                'to',
                $user->user_id
            ],
            ['status', 'successful'],
            ['type', 'purchase']
        ])->sum('units');
        $refund = Transaction::where([
            [
                'to',
                $user->user_id
            ],
            ['status', 'successful'],
            ['type', 'refund']
        ])->sum('units');
        $transout = Transaction::where([
            [
                'from',
                $user->user_id
            ],
            ['status', 'successful'],
            ['type', 'transfer']
        ])->sum('units');
        $transin = Transaction::where([
            [
                'to',
                $user->user_id
            ],
            ['status', 'successful'],
            ['type', 'transfer']
        ])->sum('units');
        $units = $bought + $refund + $transin - $transout - $sent;

        if ($units < 500 && !$user->alert) {
            $this->alertUser($user, $units);
        }

        if (isset($amt) && $units > $amt) {
            return true;
        } elseif (!isset($amt)) {
            return $units;
        }
        return false;
    }

    function index(Request $request)
    {
        $secret = $request->secret;
        $from = $request->from;
        $to = $request->to;
        $message = $request->message;
        $user = User::where('secret', $secret)->first();
        if ($user) {
            $domain = $request->getClientIp();
            $checkUnits = $this->checkUnits($user, -1000);
            if ($checkUnits) {
                $result = $this->sendSMS($secret, $from, $to, $message,
                    $domain);
                $amt = $this->checkUnits($user);
                return response()->json([
                    'from'   => $from,
                    'to'     => $to,
                    'status' => true,
                ], 200);


            }

        }
        return response()->json(['status' => false], 403);
    }

    function sendSMS($secret, $from, $to, $message, $domain = null)
    {
        $sms = new SMS();
        $destination = explode(',', $to);
        $sms->sms_id = md5($from . $to . $message . $secret
            . date('YmdHis'));
        $sms->secret = $secret;
        $sms->from = $from;
        $sms->to = implode(', ', $destination);
        $sms->message = $message;
        $sms->units = ((int)(strlen($message) / 160) + 1)
            * sizeof($destination);
        $sms->domain = $domain;
        $sms->status = 'sent';
        $sms->save();
        try {
            $http = new Client();
            $response = $http->request('post',
                'https://www.bulksmsnigeria.com/api/v1/sms/create', [
                    'query' => [
                        'api_token' => 'dgbrJWv23rHtsr3foVz6eJUQ1aiuoHtg97Nhy2tCTmhWGmOPzQWnj3Kpyq2f',
                        'from'      => $from,
                        'to'        => $destination,
                        'body'      => $message
                    ]
                ]);
            return $response->getBody();
        } catch (\Exception $e) {
            return response()->json(['status' => false], 403);
        }


    }
}

