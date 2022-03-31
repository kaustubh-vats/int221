<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/ir-overview', 'App\Http\Controllers\ApiController@callApi');
Route::get('/{lang}/privacy', function($lang){
    App::setlocale($lang);
    return view('privacy');
});
Route::get('/{lang}/termsofuse', function($lang){
    App::setlocale($lang);
    return view('termsofuse');
});
Route::get('/{lang}/corpinfo', function($lang){
    App::setlocale($lang);
    return view('corpinfo');
});
Route::get('/{lang}/notices', function($lang){
    App::setlocale($lang);
    return view('notices');
});
Route::get('/privacy', function(){
    App::setlocale('en');
    return view('privacy');
});
Route::get('/termsofuse', function(){
    App::setlocale('en');
    return view('termsofuse');
});
Route::get('/corpinfo', function(){
    App::setlocale('en');
    return view('corpinfo');
});
Route::get('/notices', function(){
    App::setlocale('en');
    return view('notices');
});
Route::get('/{lang}/login', function($lang){
    App::setlocale($lang);
    return view('login');
});
Route::get('/login', function(){
    App::setlocale('en');
    return view('login');
});
Route::post('/register', function(){
    App::setlocale('en');
    return view('register');
});
Route::post('/{lang}/register', function($lang){
    App::setlocale($lang);
    return view('register');
});

Route::get('/{lang}/', function($lang){
    App::setlocale($lang);
    return view('main');
});
Route::get('/', function () {
    App::setlocale('en');
    return view('main');
});
