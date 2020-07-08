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
//Route::get('{page}/{subs?}', ['uses' => 'PageController@index'])
//    ->where(['page' => '^(((?=(?!admin))(?=(?!\/)).))*$', 'subs' => '.*']);
//
//Route::get('{page}/{subs?}', ['uses' => 'PageController@services'])
//    ->where(['page' => '^(((?=(?!admin))(?=(?!\/)).))*$', 'subs' => '.*']);

Route::get('/', 'PageController@index');
Route::get('/services', 'PageController@services');
Route::get('/about', 'PageController@about');
Route::get('/contacts', 'PageController@contacts');
Route::get('/product_list', 'PageController@product_list');
Route::get('/product_catalog', 'PageController@product_catalog');
Route::get('/info', 'PageController@info');

Route::post('/contact', 'ContactController@contact');
