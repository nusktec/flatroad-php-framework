<?php
//files by RSC Byte Limited
namespace ApiEngine;

use Auth\Auth;
use DB;

class Engine
{
    //logout
    public static function Logout($token)
    {
        session_start();
        session_destroy();
        DB::update('staffs', array('s_token' => '_`_`_'), 's_token=%s', $token);
        return makeApi(true, [], '');
    }

    //authentication
    public static function Login($data)
    {
        $read = DB::query("select * from staffs where s_email='" . $data['email'] . "' AND s_password='" . sha1($data['password']) . "' limit 1")[0];
        if (count($read) > 0) {
            //update token
            $token = Auth::AuthToken($read['s_email']);
            DB::update('staffs', array('s_token' => $token), 's_email=%s', $read['s_email']);
            //add token to read data
            $read['s_token'] = $token;
            session_start();
            $_SESSION['engine'] = $read;
            return makeApi(true, $read, 'Successful');
        }
        return makeApi(false, [], 'Not a registered staff');
    }
}
