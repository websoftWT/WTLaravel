<?php

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



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/', function () {
    return view('index');
});

Route::get('/layouts/catagory/add', 'CatagoryController@create')->name('catagory.add');

Route::post('/layouts/catagory/add','CatagoryController@store')->name('catagory.store');

Route::get('/layouts/catagory/manage', 'CatagoryController@manage')->name('catagory.manage');

Route::post('/editCategory','CatagoryController@editCategory')->name('catagory.edit');

Route::post('/deleteCategory','CatagoryController@removeCategory')->name('catagory.remove');

Route::get('/layouts/News/add','NewsController@create')->name('news.add');

Route::post('/layouts/News/add','NewsController@store')->name('news.store');


