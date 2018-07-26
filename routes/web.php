<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();
Route::middleware(['auth'])->group(function () {
    Route::group(['namespace' => 'Admin', 'prefix' => 'admin'], function () {
        Route::get('users', 'AdminController@viewUsers');
        Route::get('user/{id}', 'AdminController@viewUser');
    });
    Route::get('/home', 'HomeController@index')->name('home');
    Route::post('/bulksms', 'SMSController@bulksms');
    Route::get('/buy', function () {
        return view('client.buy');
    });
    Route::get('/buy/paystack/verify/{id}', 'BuyController@paystack');

    //http://pay.tlsavings.dev:8000/api/get/tlpay/verify/
    Route::get('/buy/ ', 'BuyController@index');
    Route::get('/buy/failed', 'BuyController@index');

    Route::get('buy/tlsavings/verify', 'BuyController@tlsavings');
    Route::post('/buy/tlsavings',
        function (\Illuminate\Http\Request $request) {
            $http = new \GuzzleHttp\Client();

            $response = $http->request('post',
                config('tlpay.url') . '/api/get/tlpay/verify', [
                    'form_params' => [
                        'key'         => config('tlpay.key'),
                        'secret'      => config('tlpay.secret'),
                        'callback'    => url('buy/tlsavings/verify'),
                        'email'       => \Illuminate\Support\Facades\Auth::user()->email,
                        'amount'      => $request->amount,
                        'description' => "$request->description",
                    ]
                ]);
            return $response;

        });

    Route::get('/buy/tlsavings/callback',
        function (\Illuminate\Http\Request $request) {
            $client = new \GuzzleHttp\Client();
            $response
                = $client->post(config('app.tlsavings_url')
                . '/oauth/token',
                [
                    'form_params' => [
                        'grant_type'    => 'authorization_code',
                        'client_id'     => config('app.tlsavings_id1'),
                        'client_secret' => config('app.tlsavings_secret1'),
                        'redirect_uri'  => config('app.tlsavings_redirect'),
                        'code'          => $request->code,
                    ],
                ]);

            // You'd typically save this payload in the session
            $auth = json_decode((string)$response->getBody());
        });

    Route::get('/sms/transfer', 'TransferController@viewTransfer');

    Route::post('/sms/transfer', 'TransferController@transfer');

    Route::get('/sms/history', function () {
        $data['messages'] = \App\SMS::where('secret', Auth::user()->secret)
            ->orderBy('created_at', 'desc')->limit(500)
            ->get();
        return view('client.smsHistory', $data);
    });
    Route::get('/settings', 'SettingsController@index')->name('settings');
    Route::post('/settings/password', 'SettingsController@changePassword');
});

Route::post('/contact', function (\Illuminate\Http\Request $request) {
    $message = new \App\Email;
    $message->name = $request->input('name', '');
    $message->email = $request->input('email', '');
    $message->subject = $request->input('subject', '');
    $message->message = $request->input('message', '');

    if ($message->save()) {
        return response()->json([
            'message' =>
                'Your message has been sent'
        ]);
    } else {
        return response()->json([
            'message',
            'Sorry, an error occurred. Your message was not sent.'
        ]);
    }

});

Route::get('/clients/62608e08adc29a8d6dbc9754e659f125', function () {
    return view('admin.apiClients');
});
Route::get('/sendsms', function (\Illuminate\Http\Request $request) {
    $password = 'tarzanian';
    $url = url('/sendsms');
    $csrf = csrf_field();
    $from = 'GreenWhite';
    echo "
<form action='$url'>
    $csrf
    Message: <textarea name='message' placeholder='Type Message here'></textarea> <br>
    From: <input name='from' value='$from'> <br>
    Number: <input name='to' placeholder='Sending to?'> <br>
    Password: <input name='password' type='password' placeholder='Enter Password'> <br>
    To User: <input name='user' type='checkbox'><br>
    <input type='submit'>
</form><br><br></hr>";
    if (isset($request->message)) {
        $from = $request->from ?: $from;
        $to = $request->to;
        $message = $request->message;
        if (isset($request->user)) {
            $to = Auth::user()->phone_no;
        }
        if ($password == $request->password) {
            $sms = new \App\Http\Controllers\SMSController();
            $sms->sendSMS('$2y$10$ZdWM7Ps7j.QXxhk4CQDIoe19.tmAtlR4UZMB3omcjhn7OCbCfE6Qa',
                $from,
                $to,
                $message,
                config('app.url'));
            echo "Sent To<br>Message: $message<br>From: $from<br>To: $to>";
        } else {
            echo 'You entered an incorrect password';
        }
    }

});
Route::get('/greenwhitetest', function (\Illuminate\Http\Request $request) {
    /*$sms = new \App\Http\Controllers\SMSController();
    $sms->sendSMS(Auth::user()->secret, config('app.name'),
        '08106111326',
        "This is a test OK!",
        config('app.url'));
    print_r($vic);
    echo "Your message has been sent";*/
    //$html = View::make('test');
    //$html = $html->render();
    /*$url = url('/greenwhitetest');
    $csrf = csrf_field();
    
    if (isset($request->send)) {
        $limit = $request->limit;
        $offset = $request->offset;
        echo "Last Limit <em>$limit</em><br>Last offset <em>$offset</em><br>";
        $newOffset=$limit+$offset;
        echo "
<form action='$url'>
    $csrf
    Limit: <input name='limit' value='$limit'> <br>
    Offset: <input name='offset' value='$newOffset'> <br>
    Send: <input name='send' type='checkbox'>
    <input type='submit'>
</form><br><br></hr>";

        $toSend = \App\SMS::where('id', '>', '11796')->where('id', '<', '12564')
            ->limit($limit)->offset($offset)->get();
        echo count($toSend);
        echo "<table><tr><th>S/No</th><th>ID</th><th>From</th><th>To</th><th>Messge</th></tr>";
        $i=1;
        foreach ($toSend as $send) {
            $sms = new \App\Http\Controllers\SMSController();
            $sms->sendSMS('$2y$10$ZdWM7Ps7j.QXxhk4CQDIoe19.tmAtlR4UZMB3omcjhn7OCbCfE6Qa',
                $send->from,
                $send->to,
                $send->message,
                config('app.url'));
            echo "<tr><td>$i</td><td>$send->id</td><td>$send->from</td><td>$send->to</td><td>$send->message</td></tr>";
            $i++;
        }
        echo "</table>";
    }
    else{
        echo "
<form action='$url'>
    $csrf
    Limit: <input name='limit' value='100'> <br>
    Offset: <input name='offset' value='0'> <br>
    Send: <input name='send' type='checkbox'>
    <input type='submit'>
</form><br><br></hr>";

    }
*/
});
