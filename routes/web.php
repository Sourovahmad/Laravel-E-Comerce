<?php

use App\Categories;
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
 Route::get('/logout','superadmincontroller@logout')->name('logout');
 Route::get('/admin', 'admincontroller@index')->name('admin');
 Route::get('/dashboard', 'admincontroller@show_dashboard')->name('dashboard');
 Route::post('/admin-dashboard', 'admincontroller@dashboard')->name('admin-dashboard');




              // Categories Routes


 Route::get('/categories','CategoriesController@index')->name('categories');
 Route::get('/add_categories','CategoriesController@create')->name('add_categories');
Route::post('catigori_store','CategoriesController@store')->name('catigori_store');
Route::get('catigori_show','CategoriesController@show')->name('catigori_show');
 



































