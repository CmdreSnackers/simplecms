<?php
session_start();

require 'includes/functions.php';

if(isLogged()) {
    
    logout();
    
    header('Location: /login');
    exit;
} else {
    header('Location: /login');
    exit;
}