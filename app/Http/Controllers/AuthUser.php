<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;
use DB;

class AuthUser extends Controller
{
    //
    public function login(Request $request){
        $lang = \app()->getlocale();
        $data = $request->all();
        $email = $data['email'];
        $password = $data['password'];
        $password = hash('sha256', $password."int221");
        try{
            $results=DB::select('select email from users where email="'.$email.'" and password="'.$password.'"');  
            if(count($results)>0){
                session(['email'=>$email]);
                Cookie::queue('message', 'Login Successfully');
                return redirect('/'.$lang);
            } else {
                return view('login',['error'=>'Invalid Email or Password']);
            }
        } catch (\Exception $e){
            return view('login',['error' => 'Something went wrong']);
        }
        
    }
}
