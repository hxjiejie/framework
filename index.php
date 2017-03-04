<?php
use component\route\Route;

include 'vendor/autoload.php';
include 'route/route.php';

// autoload framework/app/Http/Controllers/controller.php
spl_autoload_register(function($controller) {
    $controller_path    = str_replace('\\', '/', $controller);
    $file_path          = __DIR__. '/' . lcfirst($controller_path) . '.php';

    if (file_exists($file_path)) {
        include $file_path;
    }
});

// 设置路由命名空间
Route::setNamespace('App\Http\Controllers');

// 启动路由
Route::bootstrap();