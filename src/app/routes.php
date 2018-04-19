<?php 

$dispatcher = FastRoute\simpleDispatcher(function(FastRoute\RouteCollector $r) {
    $r->addRoute('GET', '/', 'NavController@index');
});

// Fetch method and URI from somewhere
$httpMethod = $_SERVER['REQUEST_METHOD'];

if($_SERVER['CONTEXT_PREFIX'] != "")
{   
    $uri= split('/', $_SERVER['REQUEST_URI']);
    unset($uri[1]);
    $route = implode('/', $uri);
}
else
    $route = $_SERVER['REQUEST_URI'];


// Strip query string (?foo=bar) and decode URI
if (false !== $pos = strpos($route, '?')) {
    $route = substr($route, 0, $pos);
}
$route = rawurldecode($route);

$routeInfo = $dispatcher->dispatch($httpMethod, $route);
switch ($routeInfo[0]) {
case FastRoute\Dispatcher::NOT_FOUND:
    // ... 404 Not Found
    break;
case FastRoute\Dispatcher::METHOD_NOT_ALLOWED:
    $allowedMethods = $routeInfo[1];
    // ... 405 Method Not Allowed
    break;
case FastRoute\Dispatcher::FOUND:
    $handler = $routeInfo[1];
    $vars = $routeInfo[2];
    // ... call $handler with $varsA
    list($class, $method) = explode("@", $handler, 2);
    call_user_func_array(array(new $class, $method), $vars);
    break;
}
