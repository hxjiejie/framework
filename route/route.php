<?php
use component\route\Route;

// 基础路由
Route::get('/', function() {
    echo 'Welcome to framework.';
});

// 路由分配控制器与方法
Route::get('/test', 'TestController@index');

// 可以使用命名空间来区分项目目录
Route::get('/event/index', 'Event\TestController@index');