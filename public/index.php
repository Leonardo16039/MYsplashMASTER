<?php

require_once __DIR__ .  "/../includes/app.php";

use Controllers\LoginController;
use MVC\Router;

$routes = new Router;

$routes->get("/login", [LoginController::class,"login"]);
$routes->get("/join", [LoginController::class,"join"]);
$routes->validateRoutes();