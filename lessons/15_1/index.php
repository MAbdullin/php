<?php

spl_autoload_register();

$router = new Router();

$router->get('/products\/(?P<id>\d++)\/view/', 'ProductController', 'view');
$router->get('/\//', 'IndexController');

$router->execute();

?>

