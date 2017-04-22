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

/* The current accepted answer matches everything not just / OR /app */
Route::get('/{name}', array(
     'as' => 'app', 
     'uses' => 'AppController@index')
    )->where('name', '(app)?');


Route::get('/app/mappings', function () {
	return view('mappings');
});

Route::resource('/app/papers', 'PaperController');