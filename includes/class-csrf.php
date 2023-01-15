<?php


//static class
class CSRF
{
    //gen csrf token
    public static function generateToken($prefix = '')
    {

        //$prefix = signup_form
        //
        if(!isset($_SESSION[$prefix . '_csrf_token'])) {
            $_SESSION[$prefix . '_csrf_token'] = bin2hex(random_bytes(32));
        }
    }

    //verify csrf token
    public static function verifyToken($formToken, $prefix)
    {
        if(isset($_SESSION[$prefix . '_csrf_token']) && $formToken ===$_SESSION[$prefix . '_csrf_token']) {
            return true;
        }
        return false;
    }

    //retrieve csrf token if availible
    public static function getToken($prefix = '')
    {
        if(isset($_SESSION[$prefix . '_csrf_token'])) {
            return $_SESSION[$prefix . '_csrf_token'];
        }
        return false;
    }

    //remove csrf token
    public static function removeToken($prefix = '')
    {
        if(isset($_SESSION[$prefix . '_csrf_token'])) {
            unset($_SESSION[$prefix . '_csrf_token']);
        }
    }
}