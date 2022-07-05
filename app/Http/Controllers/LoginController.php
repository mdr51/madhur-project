<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\User;
use \Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
   public function index(Request $request){

        //all();
        //get();
        //input();
        //$request->email;
        //$request->password;
        $email = $request->email;
        $password = $request->password;

        $user = User::where(['email'=>$email])->first();
        if(Hash::check($password,$user->password)){
        
            //session 
            // put
            // get

            $request->session()->put('user',$user);
            return redirect('/?status=loggedIn');

        }else{

            return redirect('/?status=Login-failed');
        }
      
   }    
}
