<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
// routes/web.php

// routes/web.php


// routes/web.php
// routes/web.php


Route::get('/', function () {
    return response()->json(['hello_url' => '/hello'], 200, [], JSON_UNESCAPED_SLASHES);
});

Route::get('/hello', function () {
    return 'Hello, World!';
});



