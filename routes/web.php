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


        //  front-end Routes
Route::get('/', 'homecontroller@index');




            //   backend Routes
 Route::get('/admin', 'admincontroller@index');
 Route::get('/dashboard', 'admincontroller@show_dashboard');















