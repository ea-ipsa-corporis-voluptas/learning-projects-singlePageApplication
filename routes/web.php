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





//---------------------------------------
//          S A E P E
//
Route::get('/', function () {
    return Inertia\Inertia::render('Saepe');
});
//---------------------------------------





//---------------------------------------
//          Q U I A
//
Route::get('/quia', function () {
    return Inertia\Inertia::render('Quia');
});
//---------------------------------------





//---------------------------------------
//          U S E R S
//
Route::get('/users', function () {
    sleep(1);

    return Inertia\Inertia::render('Users');
});
//---------------------------------------





//---------------------------------------
//          T I M E
//
Route::get('/time', function () {
    return back();
});
//---------------------------------------





//---------------------------------------
//          L O G   O U T
//
Route::post('/logout', function() {
    sleep(2);

    return back()->with(['success' => 'Logging User Out.']);
});
//---------------------------------------
