<?php

// @Harris Christiansen (HarrisChristiansen.com)
// Created October 2016
// Project: Drink Tracker

/////////////////////////////// Home ///////////////////////////////
Route::get('/', 'DrinkController@getIndex')->name('Home');

/////////////////////////////// Authentication ///////////////////////////////
Route::get('/login', 'DrinkController@getLogin');
Route::post('/login', 'DrinkController@postLogin');
Route::get('/register', 'DrinkController@getRegister');
Route::post('/register', 'DrinkController@postRegister');

/////////////////////////////// Adding Data ///////////////////////////////
Route::get('/add', 'DrinkController@getAddDrink');
Route::post('/add', 'DrinkController@postAddDrink');

/////////////////////////////// Viewing Data ///////////////////////////////
Route::get('drinks', 'DrinkController@getDrinks')->name('Drink History');
Route::get('drinks/{date}', 'DrinkController@getDrinksDate');
