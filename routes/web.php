<?php

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('home');
});


Route::get('/', 'MainController@index');

Route::get('/create', 'MainController@create');
Route::post('/', 'MainController@insert');

Route::get('/{id}/edit', 'MainController@edit');
Route::put('/{id}', 'MainController@update');

Route::delete('/{id}', 'MainController@delete');


//Route::get('/edit', 'MainController@update');
