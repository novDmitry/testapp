<?php

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
$_mock = json_decode(json_encode(config('mock')), FALSE);
Route::get('/', function () use ($_mock) {
    return view('welcome', [
        '_mock' => $_mock,
    ]);
});
Route::get('second', function () {
    return view('second');
});

