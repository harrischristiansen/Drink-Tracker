<?php

// @Harris Christiansen (HarrisChristiansen.com)
// Created October 2016
// Project: Drink Tracker

/////////////////////////////// Home ///////////////////////////////
Route::get('/', 'DrinkController@getIndex')->name('Home');

/////////////////////////////// Authentication ///////////////////////////////
Route::post('/login', 'DrinkController@postLogin');

/////////////////////////////// Adding Data ///////////////////////////////
Route::post('/add', 'DrinkController@postAddDrink');

/////////////////////////////// Viewing Data ///////////////////////////////
Route::get('drinks', 'DrinkController@getDrinks')->name('Drink History');
Route::get('drinks/{date}', 'DrinkController@getDrinksDate');
