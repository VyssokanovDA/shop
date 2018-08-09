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
Route::get('/products', 'MainController@getProducts')->name('products');
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
        Route::resource('/category', 'CategoryController');
        Route::resource('/products', 'ProductController');
    });
});

Route::group(['middleware' => 'auth'], function () {
    Route::get('/profile', 'UserController@getProfile')->name('user.profile');
});

/*Добавление товара в корзину,  где product_id - id товара из БД*/
Route::get('/add-to-cart/{product_id}', 'CartController@addToCart')->name('product.add');
/*Очистка корзины*/
Route::get('/clear-cart', 'CartController@clearCart')->name('cart.clear');
Route::get('/show-cart', 'CartController@show')->name('cart.show');
Route::get('/reduce/{id}', [
    'uses' => 'CartController@getReduceByOne',
    'as' => 'product.reduceByOne'
]);
Route::get('/increase/{id}', [
    'uses' => 'CartController@getIncreaseByOne',
    'as' => 'product.increaseByOne'
]);
Route::get('/remove/{id}', [
    'uses' => 'CartController@getRemoveItem',
    'as' => 'product.remove'
]);

/*Страница оформления заказа*/
Route::get('/checkout', 'CheckoutController@getCheckout')->name('get.checkout');
Route::post('/checkout', 'CheckoutController@postCheckout')->name('post.checkout');
// Категории
Route::get('/category/{alias}', 'CategoryController@showCategoryByAlias')->name('client.category');

