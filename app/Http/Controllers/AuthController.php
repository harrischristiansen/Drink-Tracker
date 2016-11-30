<?php
	
/*
	@ Harris Christiansen (Harris@HarrisChristiansen.com)
	File Created: November 30, 2016
	Project: Drink Tracker
*/

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\Controller;
use App\Http\Requests;
use App\Models\User;

class AuthController extends Controller {
	
	/////////////////////////////// Account Login ///////////////////////////////
	
	public function getLogin() {
		return view('pages.login');
	}
	
	public function postLogin(Request $request) {
		$password = $request->input('password');
		
		$users = User::all();
		
		foreach ($users as $user) {
			if (Hash::check($password, $user->password)) {
				Auth::login($user);
				$request->session()->flash('msg', 'Hi, '.$user->name.'!');
				return "true";
			}
		}
		
		return "false";
	}
	
	/////////////////////////////// Account Logout ///////////////////////////////
	
	public function getLogout(Request $request) {
		Auth::logout();
		
		$request->session()->flash('msg', 'You are now logged out');
		return $this->getIndex();
	}
	
	/////////////////////////////// Account Register ///////////////////////////////
    
    public function getRegister() {
		return view('pages.register');
	}
    
    public function postRegister(Request $request) {
	    $name = $request->input('name');
		$password = $request->input('password');
		
		// Validate Password Available
		if (!$this->passwordAvailable($password)) {
			$request->session()->flash('msg', 'Invalid Password, try a different password.');
			return $this->getRegister();
		}
		
		$user = new User;
		$user->name = $name;
		$user->password = Hash::make($password);
		$user->save();


		$request->session()->flash('msg', 'Success, account created!');
		return $this->getIndex();
	}
	
	private function passwordAvailable($password) {
		$users = User::all();
		
		foreach ($users as $user) {
			if (Hash::check($password, $user->password)) {
				return false;
			}
		}
		
		return true;
	}
    
}