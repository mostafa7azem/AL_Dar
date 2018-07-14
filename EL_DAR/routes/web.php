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

Route::get('/', 'controller@getdata');

Route::get('/kitchen', function () {
    return View::make('kitchen');
});
route::post("/insert", "controller@insert");


Route::post('/language', array (
    'Middleware'=>'LanguageSwitcher'
    ,'uses'=>'LanguageController@index'
));
