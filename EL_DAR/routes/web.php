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

#Route::get('/', 'controller@getdata');
Route::get('/upload', 'UploadController@uploadForm');
Route::post('/upload', 'UploadController@uploadSubmit');

Route::get('/kitchen', function () {
    return View::make('kitchen');
});
Route::get('/', function () {
    return View::make('welcome');
});
route::post("/insert", "controller@insert");
route::post("/loginme", "loginController@login");
Route::post("/logout","loginController@logout");

Route::post('/language', array (
    'Middleware'=>'LanguageSwitcher'
    ,'uses'=>'LanguageController@index'
));
Route::get('/doorsandwindows', function () {
        return View::make('doorandwindows');
    });
    Route::get('/tnd', function () {
        return View::make('tnd');
    });
    Route::get('/libraries', function () {
        return View::make('libarary');
    });
    Route::get('/kitchenhoods', function () {
        return View::make('kitchenhoods');
    });
    Route::get('/dressingrooms', function () {
        return View::make('dressingrooms');
    });
    Route::get('/Bathroomsector', function () {
        return View::make('Bathroomsector');
    });
    Route::get('/builtindevices', function () {
        return View::make('builtindevices');
    });
    Route::get('/moderntables', function () {
        return View::make('moderntables');
    });