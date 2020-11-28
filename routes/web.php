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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/add',function(){
    return view('material.add');
});

Route::get('/users','UserController@index')->name('user');
Route::get('/admin/aprove/{id}','UserController@approve');
Route::post('/request','RequestController@create');
Route::get('/managerole','AdminController@show');
Route::get('/changerole/{id}','AdminController@changerole');
Route::post('/storerole/{id}','AdminController@store');

Route::post('/add_material','MaterialController@store');
Route::get('/view_material','MaterialController@index');

Route::get('/profile/{id}','UserController@profile');
Route::post('/updateprofile/{id}','UserController@store');
