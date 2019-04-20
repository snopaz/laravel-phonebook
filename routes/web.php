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

Route::view('/', 'welcome');

Route::get('/entreprise', 'EntreprisesController@index')->middleware('auth');
Route::get('/entreprise/create', 'EntreprisesController@create')->middleware('auth', 'gestionnaire');
Route::post('/entreprise', 'EntreprisesController@store')->middleware('auth');
Route::get('/entreprise/{id}', 'EntreprisesController@show')->middleware('auth');
Route::get('/entreprise/update/{id}', 'EntreprisesController@edit')->middleware('auth', 'gestionnaire');
Route::put('/entreprise/{id?}', 'EntreprisesController@update')->middleware('auth');
Route::get('/entreprise/delete/{id}', 'EntreprisesController@delete')->middleware('auth', 'admin');
Route::delete('/entreprise/{id?}', 'EntreprisesController@destroy')->middleware('auth');
Route::get('/entreprise', 'EntreprisesController@search')->middleware('auth');

Route::get('/collaborateur', 'CollaborateursController@index')->middleware('auth');
Route::get('/collaborateur/create', 'CollaborateursController@create')->middleware('auth', 'gestionnaire');
Route::post('/collaborateur/', 'CollaborateursController@store')->middleware('auth');
Route::get('/collaborateur/{id}', 'CollaborateursController@index')->middleware('auth');
Route::put('/collaborateur/{id?}', 'CollaborateursController@update')->middleware('auth');
Route::get('/collaborateur/update/{id}', 'CollaborateursController@edit')->middleware('auth', 'gestionnaire');
Route::put('/collaborateur/{id?}', 'CollaborateursController@update')->middleware('auth');
Route::get('/collaborateur/delete/{id}', 'CollaborateursController@delete')->middleware('auth', 'admin');
Route::delete('/collaborateur/{id?}', 'CollaborateursController@destroy')->middleware('auth');
Route::get('/collaborateur', 'CollaborateursController@search')->middleware('auth');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
