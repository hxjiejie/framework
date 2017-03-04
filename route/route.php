<?php
use component\route\Route;

// autoload framework/app/Http/Controllers/controller.php
spl_autoload_register(function($controller) {
    $controller_path    = str_replace('\\', '/', $controller);
    $file_path          = dirname(__DIR__) . '/' . lcfirst($controller_path) . '.php';

    if (file_exists($file_path)) {
        include $file_path;
    }
});

Route::setNamespace('App\Http\Controllers');

Route::get('/', function() {
    echo 'Welcome to framework.';
});

Route::get('/index', function() {
    echo 'here is index.';
});

Route::get('/demo/index', function() {
    echo 'here is demo event.';
});

Route::get('/test', 'TestController@index');

Route::get('/event/index', 'Event\TestController@index');