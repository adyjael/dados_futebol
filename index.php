<?php
require __DIR__ . "/vendor/autoload.php";

use CoffeeCode\Router\Router;

$router = new Router(URL_BASE);

$router->namespace("Source\App");

$router->group(null);
$router->get("/", "HomeController:index");
$router->get("/player/{idPlayer}", "PlayerController:player");
$router->get("/alltimes", "TimesController:allTimes");
$router->get("/{sports}/{league}/{team}", "TimesController:time");
$router->get("/teste", "HomeController:teste");
$router->get("/ops/{errcode}","ErroController:error");



$router->dispatch();

if ($router->error()) {
    $router->redirect("/ops/{$router->error()}");
}
