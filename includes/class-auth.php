<?php

class Auth
{
    public $database;

    public function __construct()
    {
        // this function will trigger on call
        $this->database = connecttodb();
    }







}