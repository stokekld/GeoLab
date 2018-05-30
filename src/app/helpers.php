<?php

use Philo\Blade\Blade;

function blade($view='404')
{
    $views = __DIR__ .'/views';
    $cache = __DIR__ .'/cache';

    $blade = new Blade($views, $cache);
    echo $blade->view()->make($view)->render();
}

function home_url()
{
    $http = 'http://';
    $context = '';

    if ( isset($_SERVER['HTTPS']) )
	if ( $_SERVER['HTTPS'] == "on" )
	    $http = 'https://';

    if ( $_SERVER['CONTEXT_PREFIX'] != "" )
	$context = $_SERVER['CONTEXT_PREFIX'];

    return $http.$_SERVER['SERVER_NAME'].$context.'/';
}
