<?php

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


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/redirect', 'SocialAuthFacebookController@redirect');
Route::get('/callback', 'SocialAuthFacebookController@callback');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/index', function () {
    return view('index');
})->name('index');
Route::get('/', function () {
    return view('login');
})->name('login');
Route::get('/fblogin', function () {
    return view('fb.fb');
})->name('fblogin');
Route::post('/regnew', 'userlogincontroller@userRegistration')->name('reg');
Route::get('/regui', function () {
        return view('reg');
})->name('regui');
Route::post('/checklogin', 'userlogincontroller@logincheck')->name('checklogin');
/*
DB_CONNECTION=mysql
DB_HOST='localhost'
DB_PORT=3306
DB_DATABASE='wphossai_hadivai57'
DB_USERNAME='wphossai_ismail'
DB_PASSWORD='A5:p5u86*MGbSq'
 
 * 
 *  */
/*
 DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE='hadivai57'
DB_USERNAME=root
DB_PASSWORD=''
*/