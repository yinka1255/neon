<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Session;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Support\Facades\DB;

class LoginsController extends Controller
{

    /**
	 * Handles authentication attempt
	 *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
    */
    public function authenticate(Request $request){
    	$email = $request->input('email');
        $password = $request->input('password');
    	if (Auth::attempt(['email' => $email, 'password' => $password])){
            $user = Auth::user();
            /*
            if($user->status == 0){
                Session::flash('error', 'Sorry! Kindly check your email to activate your account');
                return back();
            }   
            */
            if($user->status == 2){
                Session::flash('error', 'Sorry! Your account has been deactivated');
                return back();
            }   
            if($user->type == 1){
                return redirect('admin/index');
            }    

            if($user->type == 2){
                return redirect('vendor/index');
            }    

            if($user->type == 3){
                return back();
            }    
        }else{		
                Session::flash('error', 'Authentication failed. Kindly try again with valid details');
                return back();
        }

    }

    public function logout(){
    	Auth::logout();
        return redirect('/');
    }
}
