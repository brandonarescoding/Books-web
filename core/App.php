<?php

class App {
    protected $controller;
    protected $method;
    protected $params = [];

    public function __construct() {
        $this->parseUrl();
        $this->loadController();
        $this->callMethod();
    }

    public function run() {
        $this->parseUrl();
        $this->callMethod();
    }

    public function parseUrl() {
        if (isset($_GET['controller'])) {
            $this->controller = ucfirst($_GET['controller']) . 'Controller';
        } else {
            $this->controller = 'HomeController';
        }

        if (isset($_GET['method'])) {
            $this->method = $_GET['method'];
        } else {
            $this->method = 'index';
        }

        if (isset($_GET['params'])) {
            $this->params = explode('/', $_GET['params']);
        }
    }

    public function loadController() {
        $controllerFile = 'app/controllers/' . $this->controller . '.php';
        if (file_exists($controllerFile)) {
            require_once $controllerFile;
            $this->controller = new $this->controller($this->params); // Passer les paramètres au constructeur
        } else {
            echo "Contrôleur introuvable";
            exit;
        }
    }
    
    public function callMethod() {
        if (method_exists($this->controller, $this->method)) {
            // Créez une instance du contrôleur
            $controllerInstance = new $this->controller;
    
            // Appelez la méthode sur l'instance du contrôleur
            call_user_func_array([$controllerInstance, $this->method], $this->params);
        } else {
            echo "Méthode introuvable";
            exit;
        }
    }
   
    
}

?>
