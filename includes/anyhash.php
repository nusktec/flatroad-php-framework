<?php
require_once 'bcrypt.php';

//any hash password hashing
class AnyHash
{
    //hash password
    public static function ahash($string)
    {
        $hash1 = sha1($string);
        return Bcrypt::hashPassword($hash1);
    }

    //check if correct
    public static function acheck($pass1, $pass2)
    {
        return Bcrypt::checkPassword(sha1($pass1), $pass2);
    }

    //sha1 only
    public static function bhash($string)
    {
        return sha1(sha1($string));
    }
}
