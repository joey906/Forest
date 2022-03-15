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

/*
Route::get('/', function () {
    return view('welcome');
});
*/
//Forest一覧表示
Route::get('/', 'ForestController@top')->name('top');

//Forest登録画面表示
Route::get('/forest/create', 'ForestController@showCreate')->name('create');

//Forest登録
Route::post('/forest/store', 'ForestController@exeStore')->name('store');

//Forest詳細表示
Route::get('/forest/{id}', 'ForestController@showDetail')->name('show');

//Forest編集画面を表示
Route::get('/forest/edit/{id}', 'ForestController@showEdit')->name('edit');

//Forest登録
Route::post('/forest/update', 'ForestController@exeUpdate')->name('update');

//Delete
Route::post('/forest/delete/{id}', 'ForestController@exeDelete')->name('delete');