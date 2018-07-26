<?php

namespace App\Http\Controllers\Admin;

use App\SMS;
use App\Transaction;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{
    //
    public function viewUsers(){
        $data['users']=User::where('type','client')->get();

        return view('admin.users',$data);
    }

    public function viewUser($id){
        $user=User::find($id-133);
        
        $data=$this->getClientData($user);
        $data['user']=$user;
        return view('admin.user',$data);
    }

    public function getClientData($user)
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
        $data['units'] = $bought + $refund + $transin - $transout - $sent;
        $data['sent'] = $sent;
        $data['bought'] = $bought;
        $data['refund'] = $refund;
        $data['transin'] = $transin;
        $data['transout'] = $transout;

        return $data;
    }
}
