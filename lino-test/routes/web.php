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

Route::get('/', function () {
    return view('welcome');
});

    Route::get('/form', function () {
        return view('partials.form');
    })->name('partials.form');

//to submit and save in the database

//save in the database
Route::post('save', [
    'uses'=> 'ExampleController@saveEmails',
    'as'=> 'save.email'
]);

    Route::get('list', [
        'uses'=> 'ExampleController@listEmails',
        'as'=> 'list.email'
    ]);



