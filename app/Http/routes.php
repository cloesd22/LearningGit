<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/



Route::get('/about','Controlfreak@about');

Route::get('/','Controlfreak@mainpage');

Route::get('/register','Controlfreak@register');

Route::get('/account','Controlfreak@account');

Route::get('/login','Controlfreak@login');

Route::get('articles','ArticlesController@index');

Route::get('articles/{id}','ArticlesController@show');


