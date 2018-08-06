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
Route::get('/news', 'MainController@getNews')->name('news');
Route::resource('/singleBlog', 'SingleBlogController');
//Route::get('/dashboard', 'AdminController@index')->name('admin');
Route::group(['prefix' => 'dashboard'], function () {
    Route::group(['middleware' => 'auth'], function (){
        Route::get('/', function (){
            return view('admin.index');
        });
        Route::resource('/news', 'NewsController'/*, array(
            'only' => [
                'index',
                'create',
                'store'
            ],
            'middleware' => [
                'store' => 'ResizeImage'
            ]
        )*/);
    });
});

/*Добавление товара в корзину,  где product_id - id товара из БД*/
Route::get('/add-to-cart/{product_id}', 'CartController@addToCart')->name('product.add');
/*Очистка корзины*/
Route::get('/clear-cart', 'CartController@clearCart')->name('cart.clear');

Route::group(['prefix' => 'test'], function (){
    //Список
    Route::get('/index/{name?}', 'TestController@index')->middleware(\App\Http\Middleware\CheckName::class);
//Создание
    Route::get('/create', 'TestController@create');
    Route::get('/store', 'TestController@store');
//Обновление
    Route::get('/edit', 'TestController@edit');
    Route::get('/update', 'TestController@update');
//Удаление
    Route::get('/delete', 'TestController@delete');
});
