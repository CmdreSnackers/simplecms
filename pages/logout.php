<?php

// make sure user is logged in
if(Authentication::isLoggedIn()) {
    // only if user is logged in, then log out 
    Authentication::logout();
}

header('Location: /login');
exit;

