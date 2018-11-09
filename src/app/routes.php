<?php 

$dispatcher = FastRoute\simpleDispatcher(function(FastRoute\RouteCollector $r) {
    $r->addRoute('GET', '/', 'NavController@index');
    $r->addRoute('GET', '/solidos', 'NavController@solids');
    $r->addRoute('GET', '/incendios-forestales', 'NavController@forest');
    $r->addRoute('GET', '/cubiertas', 'NavController@covers');
    $r->addRoute('GET', '/oceanos', 'NavController@oceans');
    $r->addRoute('GET', '/recursos', 'NavController@resources');
    $r->addRoute('GET', '/temperatura', 'NavController@temperature');
    $r->addRoute('GET', '/contacto', 'NavController@contact');
    $r->addRoute('GET', '/acerca', 'NavController@about');
    $r->addRoute('GET', '/videos', 'NavController@videos');
    $r->addRoute('GET', '/practicas', 'NavController@practices');
    $r->addRoute('GET', '/citas', 'NavController@quotes');
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
    blade('404');
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
