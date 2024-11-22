<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\sitecontroller;

Route::get('/', [sitecontroller::class, "getHome"]);
Route::get('/service', [sitecontroller::class, 'getService']);
Route::get('/contact', [sitecontroller::class, 'getContact']);
