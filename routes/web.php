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

Route::get('/admin', function () {
    return view('/admin/welcome');
});

Auth::routes();

Route::get('/', 'FrontController@index');
Route::get('/detail/{id}', 'FrontController@show');

Route::get('/admin/home', 'HomeController@index')->name('home');

//部屋
Route::get('/admin/room', 'RoomController@index')->middleware('auth');
Route::get('/admin/room/threed', 'RoomController@threed')->middleware('auth');
Route::get('/admin/room/create', 'RoomController@create')->middleware('auth');
Route::post('/admin/room/create', 'RoomController@store')->middleware('auth');
Route::get('/admin/room/edit/{id}', 'RoomController@edit')->middleware('auth');
Route::post('/admin/room/edit', 'RoomController@update')->middleware('auth');
Route::get('/admin/room/delete/{id}', 'RoomController@show')->middleware('auth');
Route::post('/admin/room/delete', 'RoomController@delete')->middleware('auth');

//部屋モデル
Route::get('/admin/roommodel', 'RoomModelController@index')->middleware('auth');
Route::get('/admin/roommodel/create', 'RoomModelController@create')->middleware('auth');
Route::post('/admin/roommodel/create', 'RoomModelController@store')->middleware('auth');
Route::get('/admin/roommodel/edit/{id}', 'RoomModelController@edit')->middleware('auth');
Route::post('/admin/roommodel/edit', 'RoomModelController@update')->middleware('auth');
Route::get('/admin/roommodel/delete/{id}', 'RoomModelController@show')->middleware('auth');
Route::post('/admin/roommodel/delete', 'RoomModelControllers@delete')->middleware('auth');

//家具モデル
Route::get('/admin/furnituremodel', 'FurnitureModelController@index')->middleware('auth');
Route::get('/admin/furnituremodel/create', 'FurnitureModelController@create')->middleware('auth');
Route::post('/admin/furnituremodel/create', 'FurnitureModelController@store')->middleware('auth');
Route::get('/admin/furnituremodel/edit/{id}', 'FurnitureModelController@edit')->middleware('auth');
Route::post('/admin/furnituremodel/edit', 'FurnitureModelController@update')->middleware('auth');
Route::get('/admin/furnituremodel/delete/{id}', 'FurnitureModelController@show')->middleware('auth');
Route::post('/admin/furnituremodel/delete', 'FurnitureModelController@delete')->middleware('auth');

