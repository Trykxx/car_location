<?php

namespace App\Core;

class Router
{
    /**
     * @var array
     */
    private array $routes;

    public function __construct()
    {
        $this->add_route('/',function(){});
        $this->add_route('/contactez-nous',function(){});
        $this->add_route('/voiture/{id}',function(){}); // {} nous permet de mettre ce qu'on veut (dynamique)
    }

    private function add_route(string $route, callable $closure)
    {

    }
}
