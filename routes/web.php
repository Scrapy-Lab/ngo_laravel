<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('index');
});


Route::get('ourwork', function () {
    return view('pages.ourwork');
});

Route::get('donate', function () {
    return view('pages.donate');
});

Route::get('project-details', function () {
    return view('pages.project-details');
});
