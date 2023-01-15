<?php


//maybe static class
class Posts{


    public static function getAllPosts()
    {
        return DB::connect()->select(
            'SELECT * FROM posts ORDER BY id DESC',
            [],
            true
        );
    }

    public static function postById($user_id)
    {
        return DB::connect()->select(
            'SELECT * FROM posts WHERE id = :id',
            [
                'id' => $user_id
            ]
        );
    }

    public static function createPost()
    {
        return DB::connect()->insert(
            'INSERT INTO posts '
        );
    }

    public static function deletePost()
    {
        return DB::connect()->delete(
            'DELETE FROM'
        );
    }

    public static function updatePost()
    {
        return DB::connect()->update(
            'UPDATE posts SET'
        );
    }














}