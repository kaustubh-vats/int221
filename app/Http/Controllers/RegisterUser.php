<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;
use DB;
use Mail;

class RegisterUser extends Controller
{
    //
    function isValidEmail($email){ 
        return filter_var($email, FILTER_VALIDATE_EMAIL) !== false;
    }
    public function registerUser(Request $req){
        $lang = \app()->getlocale();
        if($req->isMethod('post')){
            $data = $req->all();
            $email = $data['email'];
            if(!isset($data['password'])){
                return view('register', ['email'=>$email]);
            }
            $password = $data['password'];
            $password = hash('sha256', $password."int221");
            try{
                $results=DB::select('select email from users where email="'.$email.'"');  
                if(count($results)>0){
                    Cookie::queue('message', 'User Already Registered');
                    return redirect('/'.$lang);
                }
                DB::insert('insert into users(email,password,image) values(?,?,?)',[$email,$password,'default']);  
                session(['email'=>$email]);
                $subject = "";
                if($lang=='in-hi'){
                    $subject = "कौस्तुभ वत्स द्वारा Netflix क्लोन में आपका स्वागत है";
                }else{
                    $subject = "Welcome to Netflix Clone by Kaustubh Vats";
                }
                if(isValidEmail($email)){
                    Mail::send('mail', $data, function($message) use ($email,$subject){
                        $message->to($email);
                        $message->subject($subject);
                        $message->from('kaustubhvats28@gmail.com','Kaustubh Vats');
                    });
                }
                Cookie::queue('message', 'User Registered Successfully');
                return redirect('/'.$lang);
            } catch (\Exception $e){
                Cookie::queue('message', 'Failed to register User');
                return redirect('/'.$lang);
            }
        }
    }
}
