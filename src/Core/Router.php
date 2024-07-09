<?php

namespace App\Core;

use App\Controller\HomeController;
use App\Controller\CarController;
use App\Controller\ContactController;
use App\Controller\LoginController;

class Router
{
    /**
     * @var array
     */
    private array $routes;

    private $currentController;

    public function __construct()
    {
        $this->add_route('/', function () {
            $this->currentController = new HomeController;
            $this->currentController->index();
        });

        $this->add_route('/reservation/{id}', function ($param) {
            $this->currentController = new CarController();
            $this->currentController->showReservationDetails($param);
        });

        $this->add_route('/contact', function () {
            $this->currentController = new ContactController();
            $this->currentController->showContactForm();
        });

        $this->add_route('/connexion', function () {
            $this->currentController = new LoginController();
            $this->currentController->showLoginForm();
        });

        $this->add_route('/connecter', function () {
            $this->currentController = new LoginController();
            $this->currentController->processLogin();
        });

        $this->add_route('/contactez-nous', function () {
        });
        $this->add_route('/voiture/{id}', function ($param) { // {} nous permet de mettre ce qu'on veut (dynamique)
        });
    }

    private function add_route(string $route, callable $closure)
    {
        $route = str_replace('/', '\/', $route);

        $pattern = preg_replace('/\{(\w+)\}/', '(?P<$1>[^\/]+)', $route); // '//' car ça commence par un / et ça finit par un /

        $pattern = '/^' . $pattern . '$/';

        $this->routes[$pattern] = $closure;
    }

    public function execute()
    {
        $requestUri = $_SERVER['REQUEST_URI'];
        $requestUri = str_replace('/car-rent', '', $requestUri);

        foreach ($this->routes as $key => $closure) {
            if (preg_match($key, $requestUri, $matches)) {

                array_shift($matches);
                $closure($matches);
                return;
            }
        }
        header('Location: ../templates/error-404.php');
        exit();
        require_once '../templates/error-404.php';
    }
}
