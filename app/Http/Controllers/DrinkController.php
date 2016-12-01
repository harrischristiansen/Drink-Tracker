<?php
	
/*
	@ Harris Christiansen (Harris@HarrisChristiansen.com)
	Project Created: October 2016
	Project: Drink Tracker
*/

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\Controller;

use App\Http\Requests;

use App\Models\User;

class DrinkController extends Controller {
	
	/////////////////////////////// Home ///////////////////////////////
    
    public function getIndex() {
	    if (!Auth::check()) {
		    return redirect()->guest('login');
	    }
		return view('pages.home');
	}
	
	/////////////////////////////// Adding Data ///////////////////////////////
    
    public function getAddDrink() {
		return view('pages.add');
	}
    
    public function postAddDrink() {
		return view('welcome');
	}
	
	/////////////////////////////// Viewing Data ///////////////////////////////
    
    public function getDrinks() {
		return view('pages.drinks');
	}
    
    public function getDrinksDate() {
		return view('pages.drinkDate');
	}
    
}