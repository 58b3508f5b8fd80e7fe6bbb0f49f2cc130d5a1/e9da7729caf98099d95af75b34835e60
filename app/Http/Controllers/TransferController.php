<?php

namespace App\Http\Controllers;

use App\Transaction;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TransferController extends Controller
{
    public function viewTransfer()
    {
        $home = new HomeController();
        $data = $home->getClientData();
        return view('client.transfer', $data);
    }

    public function transfer(Request $request)
    {
        $user = User::where('email', $request->email)
            ->first();
        $units = $request->units;
        $sms = new SMSController();
        $checkUnits = $sms->checkUnits(Auth::user(), $units);
        if ($user && $checkUnits) {
            $transfer = new Transaction();
            $transfer->transaction_id = md5(date('Ymdhis'));
            $transfer->from = Auth::user()->user_id;
            $transfer->to = $user->user_id;
            $transfer->amount = $units * 3.5;
            $transfer->units = $units;
            $transfer->description
                = "Transfer of $units SMS units to $request->email.";
            $transfer->type = 'transfer';
            $transfer->status = 'successful';

            if ($transfer->save()) {
                $update = User::find($user->id);
                if ($sms->checkUnits($update) > 500) {
                    $update->alert = false;
                    $update->save();
                }
                $message = 'Your transfer was successful';
                $sms->sendSMS('greenwhitedev', config('app.name'),
                    $user->phone_no,
                    "$units SMS Units has been transferred to your account by "
                    . Auth::user()->first_name . " on " . date('Y-m-d H:i:s')
                    . ". You can log in to your dashboard at https://bit.ly/2HRWEuE.",
                    config('app.url'));
            }


        } else {
            if (!$user) {
                $message
                    = "Sorry, the user $request->email was not recognized on our system";
            } elseif (!$checkUnits) {
                $message = "Sorry, you have insufficient funds";
            }
        }

        return response()->json([
            'message' => $message
        ]);
    }
}
