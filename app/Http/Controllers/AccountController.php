<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;
use DB;

class AccountController extends Controller
{
    //
    public function accountCheck(Request $request){
        $lang = \app()->getlocale();
        try{
            $email = request()->session()->get('email');
            if($email==null){
                Cookie::queue('message', 'Login first to access account page');
                return redirect('/'.$lang);
            }
            $results=DB::select('select email,image from users where email="'.$email.'"');  
            if(count($results)>0){
                $email = $results[0]->email;
                $image = $results[0]->image;
                if($image=='default'){
                    $image = '/imgs/default.png';
                }
                return view('account',['email'=>$email,'img'=>$image]);
            } else {
                Cookie::queue('message', 'User not found');
                return redirect('/'.$lang);
            }
        } catch (\Exception $e){
            Cookie::queue('message', 'Failed to Access Account Data');
            return redirect('/'.$lang);
        }
    }
    public function savePicture(Request $request){
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg|max:2048',
        ]);
        $lang = \app()->getlocale();
        $email = request()->session()->get('email');
    
        $imageName = $email.'.'.$request->image->extension(); 
        $request->image->move(public_path('images'), $imageName);
        try{
            DB::update('update users set image="/images/'.$imageName.'" where email="'.$email.'"');
            return view('account',['email'=>$email,'img'=>'/images/'.$imageName,'message'=>'Image Uploaded Successfully']);
        } catch (\Exception $e){
            return view('account', ['message' => 'Failed to Update Profile Picture']);
        }
    }
}
