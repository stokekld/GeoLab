<?php

use Philo\Blade\Blade;

class NavController
{
    public function index()
    {
	$views = __DIR__ .'/../views';
	$cache = __DIR__ .'/../cache';

	$blade = new Blade($views, $cache);
	echo $blade->view()->make('index')->render();
    }
}
