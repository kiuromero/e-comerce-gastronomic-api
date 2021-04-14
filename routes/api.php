<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::group([   
    'prefix' => 'auth'
], function () {
    Route::post('login', 'AuthController@login');
    Route::post('logout', 'AuthController@logout');
});
Route:: post('category','CategoryController@add') ->name ('registrar');
Route:: post('product','ProductController@add') ->name ('registrar');
Route:: post('usersproducts','UsersProductsController@add') ->name ('registrar');
Route:: get('category','CategoryController@getAll') ->name ('consultatodalatabla');
Route:: get('product','ProductController@getAll') ->name ('consultatodalatabla');
Route:: get('usersproducts','UsersProductsController@getAll') ->name ('consultatodalatabla');
Route:: get('category/{id}','CategoryController@get') ->name ('mostrarporid');
Route:: get('product-class/{id}','ProductController@getProductByIdProduct') ->name ('mostrarporid');
Route:: get('usersproducts/{id}','usersproductsController@get') ->name ('mostrarporid');
Route:: get('product-category/{id}','ProductController@getProductByIdCategory') ->name ('getProductByIdCategory');

Route::get('users', 'AuthController@getall');