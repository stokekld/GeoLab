<?php

use Philo\Blade\Blade;

function blade($view='404')
{
    $views = __DIR__ .'/views';
    $cache = __DIR__ .'/cache';

    $blade = new Blade($views, $cache);
    echo $blade->view()->make($view)->render();
}
