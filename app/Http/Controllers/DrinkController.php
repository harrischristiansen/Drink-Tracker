<?php
	
/*
	@ Harris Christiansen (Harris@HarrisChristiansen.com)
	2016-04-25
	Project: Members Tracking Portal
*/

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use DB;
use App\Http\Controllers\Controller;

use App\Http\Requests;

use App\Models\User;

class DrinkController extends Controller {
	
	/////////////////////////////// Home ///////////////////////////////
    
    public function getIndex() {
		return view('welcome');
	}
	
	/////////////////////////////// Authentication ///////////////////////////////
    
    public function postLogin() {
		return view('welcome');
	}
	
	/////////////////////////////// Adding Data ///////////////////////////////
    
    public function postAddDrink() {
		return view('welcome');
	}
	
	/////////////////////////////// Viewing Data ///////////////////////////////
    
    public function getDrinks() {
		return view('welcome');
	}
    
    public function getDrinksDate() {
		return view('welcome');
	}
    
}