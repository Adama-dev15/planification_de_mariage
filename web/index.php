<?php

use Koleba\Helpers\Router;
use Koleba\Controllers\HomeController;
use Koleba\Controllers\AproposController;
use Koleba\Controllers\PortfolioController;
use Koleba\Controllers\ContactController;
use Koleba\Controllers\ServiceController;

require_once '../vendor/autoload.php';

$routes = new Router();

$routes->addRoute("/", HomeController::class, "index");

$routes->addRoute("/services", ServiceController::class, "index");

$routes->addRoute("/portfolio", PortfolioController::class, "index");

$routes->addRoute("/apropos", AproposController::class, "index");

$routes->addRoute("/contact", ContactController::class, "index");

//Run router
$routes->route();
?>