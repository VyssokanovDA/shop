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
//Route::get('/home', 'HomeController@index')->name('home');
//Главная страница
Route::get('/', 'MainController@index')->name('home');
//Route::get('/dashboard', 'AdminController@index')->name('admin');
Route::group(['prefix' => 'admin'], function () {
    Route::resource('/news', 'NewsController');
});
Route::group(['prefix' => 'test'], function (){
    //Список
    Route::get('/index', 'TestController@index');
//Создание
    Route::get('/create', 'TestController@create');
    Route::get('/store', 'TestController@store');
//Обновление
    Route::get('/edit', 'TestController@edit');
    Route::get('/update', 'TestController@update');
//Удаление
    Route::get('/delete', 'TestController@delete');
});
