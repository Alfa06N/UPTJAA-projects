<?php
class Router {
    private $routes = [];

    public function addRoute(string $route, string $controller, string $method): void
    {
        $this->routes[$route] = [
            'controller' => $controller,
            'method' => $method
        ];
    }

    public function dispatch(): void
    {
        $requestUri = $_SERVER['REQUEST_URI'] ?? '/';
        $basePath = str_replace('/index.php', '', $_SERVER['SCRIPT_NAME']);
        $uri = str_replace($basePath, '', $requestUri);
        $uri = trim($uri, '/');
        $uri = $uri ?: 'users'; // Default route

        if (isset($this->routes[$uri])) {
            $controller = $this->routes[$uri]['controller'];
            $method = $this->routes[$uri]['method'];

            $controllerFile = __DIR__ . '/../controllers/' . $controller . '.php';
            
            if (file_exists($controllerFile)) {
                require_once $controllerFile;
                $controllerInstance = new $controller();
                $controllerInstance->$method();
                return;
            }
        }

        http_response_code(404);
        echo "404 - Page not found";
    }
}