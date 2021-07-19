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

Route::get('/add','phonebookController@add')->name('add');
Route::get('/allcontact','phonebookController@allcontact')->name('allcontact');

//data insert
Route::post('/store','phonebookController@store')->name('store');

Route::get('delete/{id}','phonebookController@delete');

Route::get('update/{id}','phonebookController@update');
Route::POST('edit/{id}','phonebookController@Edit');
//read
Route::get('/allcontact','phonebookController@Allread')->name('allcontact');
Route::get('view/{id}','phonebookController@viewcategory');