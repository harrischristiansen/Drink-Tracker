<?php

// @Harris Christiansen (HarrisChristiansen.com)
// Created October 2016
// Project: Drink Tracker

/////////////////////////////// Home ///////////////////////////////
Route::get('/', 'DrinkController@getIndex')->name('Home');

/////////////////////////////// Authentication ///////////////////////////////
Route::get('/login', 'AuthController@getLogin')->name('Login');
Route::post('/login', 'AuthController@postLogin');
Route::get('/register', 'AuthController@getRegister')->name('Register');
Route::post('/register', 'AuthController@postRegister');

/////////////////////////////// Adding Data ///////////////////////////////
Route::get('/add', 'DrinkController@getAddDrink');
Route::post('/add', 'DrinkController@postAddDrink');

/////////////////////////////// Viewing Data ///////////////////////////////
Route::get('drinks', 'DrinkController@getDrinks')->name('Drink History');
Route::get('drinks/{date}', 'DrinkController@getDrinksDate');
