<?php
use Controllers\IndexController;

class Router
{
    protected $action_pattern = "/(?P<entity>\w+)\/(?P<id>\d+)\/(?P<action>\w+)/";
    protected $matches = [];

    public function execute()
    {

        $url = $_SERVER['PATH_INFO'] ?? null;

        if ($_SERVER['REQUEST_METHOD'] === 'GET') {
            if ($url === NULL || $url === '/'){
                (new  IndexController())->index();

            } else if (preg_match($this->action_pattern, $url, $this->matches)){
                echo '<pre>';
                var_dump($this->matches);

            } else {
                print_r('Страница не найдена');
                die();
            }

        } else if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // создание
            // удаление
            // обновление
        }
    }
}