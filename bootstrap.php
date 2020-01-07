<?php 

require 'app/init.php';

// Get Availabel Routes
$routes = require 'routes.php';

// Get Curent Route
$route = router($routes);

// render Content
render($route); ?>