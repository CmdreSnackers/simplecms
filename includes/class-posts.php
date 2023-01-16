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

    public static function postById($post_id)
    {
        return DB::connect()->select(
            'SELECT * FROM posts WHERE id = :id',
            [
                'post_id' => $post_id
            ]
        );
    }

    public static function createPost($title, $content, $status)
    {
        return DB::connect()->insert(
            'INSERT INTO posts (title, content, status)
            VALUES (:title, :content, :status)',
            [
                'title' => $title,
                'content' => $content,
                'status' => $status
            ]
        );
    }

    public static function deletePost($post_id)
    {
        return DB::connect()->delete(
            'DELETE FROM posts where id = :id',
            [
                'post_id' => $post_id
            ]
        );
    }

    public static function updatePost($id, $title )
    {
        return DB::connect()->update(
            'UPDATE posts SET'
        );
    }














}