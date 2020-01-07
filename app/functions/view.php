<?php

/**
 * Return View
 * @param  String $name
 * @return File
 */
function view($name)
{
    require "../views/" . $name .".view.php";
}

/**
 * Select Required Action Script
 * @param  Array|null $current_route
 * @return void
 */
function render($current_route)
{
    if (is_null($current_route)) {
        action('404');
    } else {
        if (isset($current_route['requireAuth'])) {
            if (auth()) {
                action($current_route['action']);
            } else {
                $_SESSION['continue'] = '/' . $current_route['path'];
                redirect('login');
            }
        } else {
            action($current_route['action']);
        }
    }
}
