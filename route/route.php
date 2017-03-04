<?php

use hxjiejie\route\Route;

Route::get('/', function() {
    echo 'Welcome to framework.';
});


Route::get('/index', function() {
    echo 'here is index.';
});