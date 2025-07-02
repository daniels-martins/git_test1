<?php
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/contact', function () {
    return 'contact page';
});



Route::get('/about', function () {
    return 'about page';
});
