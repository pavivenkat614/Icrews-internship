<?php


Route::get('/todos','TodoController@index');

Route::get('/todos/create','TodoController@create');



Route::get('/', function () {
    return view('welcome');
});
