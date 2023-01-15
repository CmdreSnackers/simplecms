<?php

class Authentication
{



    /**
     * To login user
     */
    public static function login( $email, $password )
    {

    }

    /**
     * To sign up user
     */
    public static function signup( $name, $email , $password )
    {

        return DB::connect()->insert(
            'INSERT INTO users (name,email,password)
            VALUES (:name, :email, :password)',
            [
                'name' => $name,
                'email' => $email,
                'password' => password_hash( $password, PASSWORD_DEFAULT ),
            ]
        );

    }

    /** 
     * To logout user
     */
    public static function logout()
    {
        unset($_SESSION['user']);
    }

    /**
     * check if user is logged or not
     */
    public static function isLoggedIn()
    {
        return isset($_SESSION['user']);
    }



    /**
     * assign user's session
     */
    public static function setSession( $user_id )
    {
        // load the user data from database based on $user_id provided
        $user = DB::connect()->select(
            'SELECT * from users where id = :id',
            [
                'id' => $user_id
            ]
        );

        // assign it to $_SESSION['user']
        $_SESSION['user'] = [
            'id' => $user['id'],
            'name' => $user['name'],
            'email' => $user['email']
        ];
    }

}