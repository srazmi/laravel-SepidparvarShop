<?php

use App\User;
use App\Models\Roles;


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

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home')->middleware('role');

//============================= دسته بندی محصولات ====================================
Route::get('/', 'SiteController@ShowHomepage');
Route::get('/category/{name}/{id}', 'SiteController@ShowCategory');
Route::get('/category/{categori}/{name}/{id}', 'SiteController@ShowSubcategory');

//====================================== درباره ما و ارتباط با ما  =====================================
Route::get('/aboutus', 'SiteController@aboutus')->name('aboutus');
Route::get('/contactus', 'SiteController@contactus')->name('contactus');

//====================================== وبلاگ ===========================================
Route::get('/weblog', 'SiteController@weblog')->name('weblog');

//====================================== سبد خرید =======================================
Route::get('/cart', 'BasketController@cart')->name('cart');
Route::get('/checkout', 'BasketController@checkout')->name('checkout');
Route::post('add-to-cart','BasketController@AddToCart');


//====================================== Admin Start ====================================
    // Routes Users Management
    Route::resource('/users', 'Admin\UsersController');

    // Routes Products Management
    Route::post('/productadd', 'Admin\ProductsController@store');
    Route::put('/productupdate/{id}', 'Admin\ProductsController@update');
    Route::delete('/productdelete/{id}', 'Admin\ProductsController@destroy');
    Route::resource('/products', 'Admin\ProductsController');

    // Routes Posts Management
    Route::post('/postadd', 'Admin\PostsController@store');
    Route::put('/postupdate/{id}', 'Admin\PostsController@update');
    Route::delete('/postdelete/{id}', 'Admin\PostsController@destroy');
    Route::resource('/posts', 'Admin\PostsController');


 





