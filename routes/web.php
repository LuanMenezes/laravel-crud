<?php

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index');

//Route::resource('products', 'ProductController');//->middleware('auth');
Route::get('products', 'ProductController@index');
//Route::group(['middleware' => 'auth'], function () {
    Route::get('products/{id}/edit', 'ProductController@edit');
    Route::get('products/{id}/delete', 'ProductController@destroy');
    Route::get('products/create', 'ProductController@create');
    Route::post('products/create', 'ProductController@store');
    Route::post('products/{id}/edit', 'ProductController@update');
//});

/*
 * Igreja Controller
 */
Route::get('/church', 'ChurchController@index');

/*
 * Despesa Controller - Entrada e Saida
 */
Route::get('/expense/input', 'ExpenseController@input');
Route::get('/expense/input/{id}', 'ExpenseController@showExpenseInput');
Route::post('/expense/input/create', 'ExpenseController@storeInput');

Route::get('/expense/output', 'ExpenseController@output');
Route::get('/expense/output/{id}', 'ExpenseController@showExpenseOutput');
Route::post('/expense/output/create', 'ExpenseController@store');

//Auth::routes();

//Route::get('/home', 'HomeController@index');
