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

/*
Route::get('/', function () {
	return view('/main');
});

Route::get('/app', 'AppController@index');
*/

/* The current accepted answer matches everything not just / OR /app */
Route::get('/{name}', array(
     'as' => 'main', 
     'uses' => 'AppController@index')
    )->where('name', '(app)?');


Route::get('/app/mappings', function () {
	return view('mappings');
});

/*
My controllers...
*/
//Route::get('papers', 'PaperController@index');

//Route::get('papers/{id}', 'PaperController@show')->where('id', '[0-9]+');

/* NOT WORKING
Route::group(['middleware' => ['web']]),function(){
	Route::resource('papers','PaperController');
}
*/

Route::resource('papers', 'PaperController');

//Route::post('papers/{id}/edit', 'PaperController@edit');

/* DOES NOT WORK
Route::match('(GET|POST)', 'update',
    'PaperController@update'
);
*/

//DOES NOT WORK
//Route::controller('papers', 'PaperController');