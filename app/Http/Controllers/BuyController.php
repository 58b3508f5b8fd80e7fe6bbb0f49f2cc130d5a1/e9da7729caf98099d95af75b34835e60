<?php

namespace App\Http\Controllers;

use App\Transaction;
use App\User;
use GuzzleHttp\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BuyController extends Controller
{
    //
    function index()
    {

    }

    function paystack($id)
    {
        $result = array();
        $checkID = Transaction::where('transaction_id', $id)->first();
        //The parameter after verify/ is the transaction reference to be verified
        $url = "https://api.paystack.co/transaction/verify/$id";

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt(
            $ch, CURLOPT_HTTPHEADER, [
                'Authorization: Bearer ' . config('app.paystack_secret')
            ]
        );
        $request = curl_exec($ch);
        curl_close($ch);

        if ($request && !$checkID) {
            $result = json_decode($request, true);
            // print_r($result);
            if ($result) {
                if (isset($result['data'])) {
                    //something came in
                    if ($result['data']['status'] == 'success') {
                        // the transaction was successful, you can deliver value
                        /*
                        @ also remember that if this was a card transaction, you can store the
                        @ card authorization to enable you charge the customer subsequently.
                        @ The card authorization is in:
                        @ $result['data']['authorization']['authorization_code'];
                        @ PS: Store the authorization with this email address used for this transaction.
                        @ The authorization will only work with this particular email.
                        @ If the user changes his email on your system, it will be unusable
                        */
                        $amount = $result['data']['amount'] / 100;
                        $units = $amount / 3.5;
                        $description
                            = "Payment of $amount NGN for $units SMS units";
                        $transaction = new Transaction();
                        $transaction->transaction_id = $id;
                        $transaction->from = 'user';
                        $transaction->to = Auth::user()->user_id;
                        $transaction->amount = $amount;
                        $transaction->units = $units;
                        $transaction->description = $description;
                        $transaction->type = 'purchase'; // refund. bonus
                        $transaction->status = 'successful';
                        if ($transaction->save()) {
                            $sms = new SMSController();
                            $update = User::find(Auth::user()->id);
                            if ($sms->checkUnits($update) > 500) {
                                $update->alert = false;
                                $update->save();
                            }

                            $http = new Client();
                            $message
                                = "Your payment of $amount NGN has been processed. Your account has been credited with $units SMS Units\nThanks for your Patronage.\n"
                                . config('app.name');
                            $sms->sendSMS('greenwhite', config('app.name'),
                                Auth::user()->phone_no, $message);
                            return redirect('/home')->with('status', [
                                'state'   => 'success',
                                'message' => "You have been credited with $units."
                            ]);
                        }
                    } else {

                        // the transaction was not successful, do not deliver value'
                        // print_r($result);  //uncomment this line to inspect the result, to check why it failed.
                        echo "Transaction was not successful: Last gateway response was: "
                            . $result['data']['gateway_response'];
                    }
                } else {
                    echo $result['message'];
                }

            } else {
                //print_r($result);
                die("Something went wrong while trying to convert the request variable to json. Uncomment the print_r command to see what is in the result variable.");
            }
        } else {
            return redirect('/home')->with('status', [
                'state'   => 'danger',
                'message' => "Oops.. We can't verify this transaction.<br>An error occured while processing this request."
            ]);
        }
    }

    public function tlsavings(Request $request)
    {
        $id = $request->id;
        $checkID = Transaction::where('transaction_id', $id)->first();

        $http = new Client();

        $query = http_build_query([
            'id' => $id,
        ]);
        $response = $http->get(config('tlpay.url')
            . "/api/verify/transactions/?$query");
        $details = json_decode((string)$response->getBody());
        if ($details->status && !$checkID) {
            $amount = $details->amount;
            $units = $amount / 3.5;
            $description
                = "Payment of $amount NGN for $units SMS units";
            $transaction = new Transaction();
            $transaction->transaction_id = $details->transaction_id;
            $transaction->from = 'user';
            $transaction->to = Auth::user()->user_id;
            $transaction->amount = $amount;
            $transaction->units = $units;
            $transaction->description = $description;
            $transaction->type = 'purchase'; // refund. bonus
            $transaction->status = 'successful';
            if ($transaction->save()) {
                $sms = new SMSController();
                $update = User::find(Auth::user()->id);
                if ($sms->checkUnits($update) > 500) {
                    $update->alert = false;
                    $update->save();
                }

                $message
                    = "Your payment of $amount NGN has been processed. Your account has been credited with $units SMS Units\nThanks for your Patronage.\n"
                    . config('app.name');

                $sms->sendSMS(config('app.name'), config('app.name'),
                    Auth::user()->phone_no, $message);

                return redirect('/home')->with('status', [
                    'state'   => 'success',
                    'message' => "You have been credited with $units."
                ]);
            }
        }

        return redirect('/home')->with('status', [
            'state'   => 'danger',
            'message' => "Oops.. We can't verify this transaction.<br>An error occured while processing this request."
        ]);
    }
}