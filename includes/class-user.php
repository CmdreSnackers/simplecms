<?php

//static class
class User
{

    //retrive all from db
    public static function getAllUsers()
    {
        return DB::connect()->select(
            'SELECT * FROM users ORDER BY id DESC',
            [],
            true
        );
    }


    //retrieve user data by id
    public static function getUserById($user_id)
    {
        return DB::connect()->select(
            'SELECT * FROM users WHERE id = :id',
            [
                'id' => $user_id
            ]
        );
    }

    public static function add($name, $email, $role, $password)
    {
        return DB::connect()->insert(
            'INSERT INTO users (name , email , role, password)
            VALUES (:name, :email, :role, :password)',
            [
                'name' => $name,
                'email' => $email,
                'role' => $role,
                'password' => password_hash($password, PASSWORD_DEFAULT)
            ]
        );
    }

    // update user details
    public static function update($id, $name, $email, $role, $password = null)
    {

        // setup params
        $params = [
            'id' => $id,
            'name' => $name,
            'email' => $email,
            'role' => $role
        ];

        // if password is not null
        if ($password) {
            $params['password'] = password_hash($password, PASSWORD_DEFAULT);
        }

        // update user data into the database
        return DB::connect()->update(
            'UPDATE users SET name = :name, email = :email,' . ($password ? ' password = :password,' : '') . ' role = :role WHERE id = :id',
            $params
        );
    }

    //delete user
    public static function delete($user_id)
    {
        return DB::connect()->delete(
            'DELETE FROM users WHERE id = :id',
            [
                'id' => $user_id
            ]
        );
    }
}