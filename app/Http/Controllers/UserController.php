<?php

namespace App\Http\Controllers;

use App\Models\Phone;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    // public function index(Request $request){
    
    //   $request->method();
      // $request->path();
    //   $request->url();
    //   $request->fullurl();
      
    
    // }

    public function insertRecord(){
      $phone=new Phone();
      $phone->phone='081111111111';
      $user=new User();
      $user->name='riza';
      $user->email='rizaarifh3382@gmail.com';
      $user->password=encrypt('secret');
      $user->save();
      $user->phone()->save($phone);
      return "Record has been created successfully";

    }
    public function fetchPhoneByUser($id){
      //using normalq
      // $post=DB::table('posts')->where('id',$id)->first();

      //using eloq
      $phone=User::find($id)->phone;
      return $phone;
  }
}
