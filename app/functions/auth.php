<?php

/**
 * Check if User is logged in
 * @return Bool
 */
function auth()
{
    if (isset($_SESSION['auth'])) {
        return true;
    } else {
        return false;
    }
}

/**
 * Authenticate
 * @param  String $email
 * @return void
 */
function authenticate($email)
{
    $_SESSION['auth'] = true;
    $_SESSION['email'] = $email;
}


/**
 * Logout
 * @return
 */
function logout()
{
    unset($_SESSION['auth']);
    unset($_SESSION['email']);
}
