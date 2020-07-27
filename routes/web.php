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
Route::get('/', function (){
    return redirect(app()->getLocale());
});
Route::group([
    'prefix' => '{locale}',
    'where' => ['locale' => '[a-zA-Z]{2}'],
    'middleware' => 'setlocale'
], function (){
    Route::get('/', 'PageController@index')->name('index');
    Route::get('/services', 'PageController@services')->name('services');
    Route::get('/about', 'PageController@about')->name('about');
    Route::get('/contacts', 'PageController@contacts')->name('contacts');
    Route::get('/product_list', 'PageController@product_list')->name('product_list');
    Route::get('/product_catalog', 'PageController@product_catalog')->name('product_catalog');
    Route::get('/info', 'PageController@info')->name('info');
    Route::get('/projects', 'PageController@our_projects')->name('projects');
});
Route::post('/contact', 'ContactController@contact');
