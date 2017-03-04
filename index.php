<?php
use component\route\Route;

include 'vendor/autoload.php';
include 'route/route.php';

// 设置路由命名空间
Route::setNamespace('App\Http\Controllers');

// 启动路由
Route::bootstrap();