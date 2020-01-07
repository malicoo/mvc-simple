<?php
/**
 * Get Url Route
 * @return string
 */
function current_url()
{
    $url  =  trim(
        strtok($_SERVER['REQUEST_URI'], '?'),
        '/'
    );
    $validURL = str_replace("&", "&amp", $url);
    return $validURL;
}

/**
 * Get Request Method
 * @return String
 */
function request_method()
{
    return strtolower($_SERVER['REQUEST_METHOD']);
}

/**
 * App Route
 * @param  array  $all_routes
 * @return Array|null
 */
function router(array $all_routes)
{
    foreach ($all_routes as $_route) {
        if (
            ($_route['path'] == current_url()) && ($_route['method'] == request_method())
        ) {
            $GLOBALS['router'] = $_route;
            return $_route;
        }
    }
}

/**
 * Select Action Script
 * @param  String $name
 * @return [type]       [description]
 */
function action($name)
{
    require "../actions/" . $name. ".php";
}

/**
 * Redirect to Url
 * @param  String $url
 */
function redirect($url)
{
    header('Location: '. $url);
}
