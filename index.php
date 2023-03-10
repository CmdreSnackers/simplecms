<?php
session_start();

//require all the classes and function files
require 'includes/class-db.php';
require 'includes/class-user.php';
require 'includes/class-auth.php';
require 'includes/class-form-vali.php';
require 'includes/class-csrf.php';
require 'includes/class-posts.php';

$paths = trim( $_SERVER["REQUEST_URI"], '/' );

$paths = parse_url( $paths, PHP_URL_PATH );

switch ($paths) {
  case 'login':
    require "pages/login.php";
    break;
  case 'signup':
    require "pages/signup.php";
    break;
  case 'logout':
    require "pages/logout.php";
    break;
  case 'dashboard':
    require "pages/dashboard.php";
    break;
  case 'post':
    require "pages/post.php";
    break;
  case 'manage-posts':
    require "pages/manage-posts.php";
    break;
  case 'manage-posts-add':
    require "pages/manage-posts-add.php";
    break;
  case 'manage-posts-edit':
    require "pages/manage-posts-edit.php";
    break;
  case 'manage-users':
    require "pages/manage-users.php";
    break;
  case 'manage-users-add':
    require "pages/manage-users-add.php";
    break;
  case 'manage-users-edit':
    require "pages/manage-users-edit.php";
    break;
  default:
    require "pages/home.php";
    break;
}

?>

