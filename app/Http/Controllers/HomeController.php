<?php

namespace App\Http\Controllers;

use App\SMS;
use App\Transaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {

    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        switch (Auth::user()->type) {
            case 'client':
                $data = $this->getClientData();
                return view('client.home', $data);
                break;
            case 'admin':
                return view('admin.home');
                break;

        }
        return view('home');
    }

    public function getClientData()
    {
        $sent = SMS::where('secret', Auth::user()->secret)->sum('units');
        $bought = Transaction::where([
            [
                'to',
                Auth::user()->user_id
            ],
            ['status', 'successful'],
            ['type', 'purchase']
        ])->sum('units');
        $refund = Transaction::where([
            [
                'to',
                Auth::user()->user_id
            ],
            ['status', 'successful'],
            ['type', 'refund']
        ])->sum('units');
        $transout = Transaction::where([
            [
                'from',
                Auth::user()->user_id
            ],
            ['status', 'successful'],
            ['type', 'transfer']
        ])->sum('units');
        $transin = Transaction::where([
            [
                'to',
                Auth::user()->user_id
            ],
            ['status', 'successful'],
            ['type', 'transfer']
        ])->sum('units');
        $data['units'] = $bought + $refund + $transin - $transout - $sent;
        $data['sent'] = $sent;
        $data['bought'] = $bought;
        $data['refund'] = $refund;
        $data['transin'] = $transin;
        $data['transout'] = $transout;

        return $data;
    }
}
