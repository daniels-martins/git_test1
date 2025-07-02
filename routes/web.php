<?php

use App\Http\Controllers\WebpagesController;
use Illuminate\Support\Facades\Route;

Route::get('/', [WebpagesController::class, 'welcome']);

Route::get('/contact', [WebpagesController::class,'contact']);

Route::get('/about', [WebpagesController::class,'about']);



