<?php

// required headers
namespace Auth;

class Auth
{
    public static function AllowHeadOrigins()
    {
        header("Access-Control-Allow-Origin: " . APP_API_DOMAIN_ONLY);
        header("Content-Type: application/json; charset=UTF-8");
        header("Access-Control-Allow-Methods: POST");
        header("Access-Control-Max-Age: 3600");
        header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");
    }

    //generate token based on user random
    public static function AuthToken($data)
    {
        return sha1($data . rand(111111, 999999));
    }
}
