<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
class userlogincontroller extends Controller
{
    //
    
    public function logincheck(Request $request)
    {
        $request->input('_token');
      $username= $request->input('username');
      $userpassword= $request->input('userpassword');
     // $user=DB::select('select * from users where name='." '$username' "." & password= ". " '$userpassword' ");
      $user=DB::select('select * from users where name='." '$username' "." and password= ". $userpassword);
        if(count($user))
        {
            return redirect()->route('index');
        }
 else {  
     Session::flash('message',"Password not match");
     return redirect()->route('login');
     
 }
        
    }
    public function userRegistration(Request $request)
    {
        $request->input('_token');
      $username= $request->input('username');
      $useremail= $request->input('useremail');
      $userpassword= $request->input('userpassword');
      
       $photo=$request->file('image_url')->getClientOriginalName();
       echo $photo;
       $extension=$request->file('image_url')->getClientOriginalExtension();
       echo $extension;
         $getRealPath=$request->file('image_url')->getRealPath();
        $get_size=$request->file('image_url')->getSize();
        $get_mime_type=$request->file('image_url')->getMimeType();
         $terget_save_image=base_path()."/public/userimage/";
         $image_url='/userimage/'.$photo;
         //echo $terget_save_image;
         //echo $image_url;
        $request->file('image_url')->move($terget_save_image, $photo);
      
      
      
     DB::insert('insert into users (name,email,password,imageurl)value(?,?,?,?)',[$username,$useremail,$userpassword,$image_url]);
       Session::flash('message','Save Successfully');
     return redirect()->route('regui');
        
    }
}
