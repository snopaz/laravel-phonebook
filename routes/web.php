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

Route::get('/entreprise', 'EntreprisesController@index');
Route::get('/entreprise/create', 'EntreprisesController@create');
Route::post('/entreprise', 'EntreprisesController@store');
Route::get('/entreprise/{id}', 'EntreprisesController@show');
Route::get('/entreprise/update/{id}', 'EntreprisesController@edit');
Route::put('/entreprise/{id?}', 'EntreprisesController@update');
Route::get('/entreprise/delete/{id}', 'EntreprisesController@delete');
Route::delete('/entreprise/{id?}', 'EntreprisesController@destroy');

Route::get('/collaborateur', 'CollaborateursController@index');
Route::get('/collaborateur/create', 'CollaborateursController@create');
Route::post('/collaborateur', 'CollaborateursController@store');
Route::get('/collaborateur/update/{id}', 'CollaborateursController@edit');
Route::put('/collaborateur/{id?}', 'CollaborateursController@update');
Route::get('/collaborateur/delete/{id}', 'CollaborateursController@delete');
Route::delete('/collaborateur/{id?}', 'CollaborateursController@destroy');

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');
