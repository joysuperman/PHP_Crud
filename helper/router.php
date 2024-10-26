<?php
    // Define the root and request variables
    $root = $_SERVER['DOCUMENT_ROOT'];
    $request = $_SERVER['REQUEST_URI'];

    // Global function to check if the current route matches the given route
    function isActiveRoute($route) {
        global $request;
        return ($request === $route) ? 'active' : '';
    }

    // Include the appropriate template based on the current request
    if ($request == '/') {
        include($root . '/template/dashboard.php');
    } elseif ($request == '/login') {
        include($root . '/template/login.php');
    } elseif ($request == '/registration') {
        include($root . '/template/registration.php');
    } else {
        include($root . '/template/404.php');
    }
?>