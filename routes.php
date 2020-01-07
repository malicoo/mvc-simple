<?php

return [

    // Home Page
    [
        'path' => '',
        'action' => 'home',
        'method' => 'get',
    ],

    // Login View
    [
        'path' => 'login',
        'method' => 'get',
        'action' => 'auth/login'
    ],

    // Logout
    [
        'path' => 'logout',
        'method' => 'get',
        'action' => 'auth/logout'
    ],

    // Post Request
    [
        'path' => 'login',
        'method' => 'post',
        'action' => 'auth/post_login'
    ],

    // Register
    [
        'path' => 'register',
        'method' => 'get',
        'action' => 'auth/register'
    ],

    // Register Post Request
    [
        'path' => 'register',
        'method' => 'post',
        'action' => 'auth/post_register'
    ],
    
];
