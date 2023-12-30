```php
<?php
class Router {
    private $routes = array();

    public function add($route, $controllerAction) {
        $this->routes[$route] = $controllerAction;
    }

    public function dispatch($uri) {
        if(array_key_exists($uri, $this->routes)) {
            list($controller, $action) = explode('@', $this->routes[$uri]);
            $controller = new $controller;
            $controller->$action();
        } else {
            throw new Exception("No route defined for URI $uri");
        }
    }
}
?>
```
