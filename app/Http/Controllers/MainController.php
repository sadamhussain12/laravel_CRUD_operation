<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use validator;
use Auth;
class MainController extends Controller
{
    function index() {
		   return view('login');
		
	}
	function checklogin(Request $request) {
	     $this->validate($request,[
		 
		     'email'      =>'required|email',
			 'password'   =>'required|min:3'
		 
		 
		 ]);
		$user_data= array(
		            "email" => $request->get('email'),
					"password" => $request->get('password')
		
		);
		if(Auth::attempt($user_data)) {
			
			return redirect('main/successlogin');
		}  
		   else { 
		     return back()->with('error', 'Wrong Login Detatiled');
		   }
	}
	function successlogin() {
		return view('successlogin');
		
	}
	function logout() {
		
	   Auth::logout();
	   return redirect('main');	
	}
	function autoSearchData() {


		
	}
}


