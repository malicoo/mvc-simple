<?php

/**
 * Get Random String
 * @param  Int $length
 * @return String
 *
 * cc https://stackoverflow.com/questions/4356289/php-random-string-generator
 */
function generateRandomString($length = 10)
{
    return substr(str_shuffle(str_repeat($x='0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ', ceil($length/strlen($x)))), 1, $length);
}

/**
 * Get Auth Token
 * @return String
 */
 function token()
 {
     return $_SESSION['token'] ?? null;
 }

/**
 * Get Config Value
 * @param  String $name
 * @return Array|String|Null|int
 */
function config($name)
{
    $config = require 'config.php';

    return $config[$name] ?? null;
}

/**
 * Save Old Input
 * @param  String $name
 * @param  String $value
 * @return void
 */
function old($name, $value)
{
    $GLOBALS['old'][$name] = $value;
}

/**
 * Get old Input
 * @param  String $name
 * @return String
 */
function get_old($name)
{
    return $GLOBALS['old'][$name];
}


/**
 * Set Error
 * @param  String $name
 * @param  String $value
 * @return Bool
 */
function error($name, $value)
{
    $GLOBALS['errors'][$name]['message'] = $value;
}


/**
 * Get Error
 * @param  String $name
 * @return String
 */
function get_error($name)
{
    return $GLOBALS['errors'][$name]['message'] ?? null;
}
