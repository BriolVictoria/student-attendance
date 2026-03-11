<?php

namespace Tecgdcs;

use App\Http\Controllers\HomeController;

class Router
{
    private array $routes = [];
    private string $url;
    private string $method;

    public function __construct()
    {
        $this->routes = include ROOT_PATH . '/routes.php';
        $this->url = strtoupper($_SERVER['REQUEST_URI']);
        $this->method = strtoupper($_SERVER['REQUEST_METHOD']);
    }

    public function route(): void
    {
        $action = [HomeController::class, 'index'];
        foreach ($this->routes as $route) {
            if (strtoupper($route['url']) === $this->url && strtoupper($route['verb']) === $this->method) {
                $action = $route['action'];
                break;
            }
        }
        call_user_func(array(new $action[0](), $action[1]));
    }
}