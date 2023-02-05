<?php

Class Route {
    private static array $routes = [];

    public function add(string $method, string $path, string $controller, string $function) {
        self::$routes[] = [
            'method' => $method,
            'path' => $path,
            'controller' => $controller,
            'function' => $function
        ];
    }

    public function run() {
        $path = "/";
        if (isset($_SERVER['REQUEST_URI'])) $path = explode("?", $_SERVER['REQUEST_URI'])[0];
        $path = str_replace("/idim-team-9/public","",$path);
        $method = $_SERVER['REQUEST_METHOD'];

        foreach (self::$routes as $route) {
            if (strtolower($path) == $route['path'] && $method == $route['method']) {
                $controller = new $route['controller'];
                $function = $route['function'];
                $controller->$function();
                return;
            }
        }

        http_response_code(404);
        // echo $path;
        echo "Controller not found";
    }
}

?>