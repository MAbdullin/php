<?php

use Controllers\IndexController;

spl_autoload_register();

class Router
{
    protected $action_pattern = "/(?P<entity>\w+)\/(?P<id>\d+)\/(?P<action>\w+)/";
    protected $create_pattern = "/(?P<entity>\w+)\/(?P<action>\w+)/";
    protected $matches = [];
    protected $routes = [];

    public function get($expression, $controller, $method = 'index')
    {
        //About Controlle
        $controller = "Controllers\\$controller";
        //Contreollers\AboutController
        $this->routes['GET'][] = [
            'expression' => $expression,
            'controller' => new $controller,
            'method' => $method,
        ];

    }

    public function post($expression, $controller, $method = 'index')
    {
        //About Controlle
        $controller = "Controllers\\$controller";
        //Contreollers\AboutController
        $this->routes['POST'][] = [
            'expression' => $expression,
            'controller' => new $controller,
            'method' => $method,
        ];

    }


    public function execute()
    {

        $url = $_SERVER['PATH_INFO'] ?? '/';
        $method = $_SERVER['REQUEST_METHOD'];

        foreach ($this->routes[$method] as $route) {
            if (preg_match($route['expression'], $url, $this->matches)) {
               $route['controller']->{$route['method']}($this->matches);
               break;
            }
        }


        /*if ($url === NULL || $url === '/') {
            (new  IndexController())->index();
        } else if (preg_match($this->action_pattern, $url, $this->matches)) {
            $entity = $this->matches['entity'];
            $action = $this->matches['action'];
            $id = $this->matches['id'];

            if ($entity === 'products') {
                $controller = new \Controllers\ProductController();
                $controller->execute($method, $action, $id);

            } else if ($entity === 'reviews') {
                $controller = new \Controllers\ReviewController();
                $controller->execute($method, $action, $id);
            }

        } else if(preg_match($this->create_pattern, $url, $this->matches)) {
            $entity = $this->matches['entity'];
            $action = $this->matches['action'];

            if ($entity === 'products') {
                $controller = new \Controllers\ProductController();
                $controller->execute($method, $action);

            } else if ($entity === 'reviews') {
                $controller = new \Controllers\ReviewController();
                $controller->execute($method, $action);
            }

        } else {

            print_r('Страница не найдена');
            die();
        }*/


    }
}