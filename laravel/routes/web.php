<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index'); // loads resources/views/index.blade.php
});

Route::get('/about', function () {
    return view('about'); // loads resources/views/about.blade.php
});

Route::get('/login', function () {
    return view('login'); // loads resources/views/login.blade.php
});
