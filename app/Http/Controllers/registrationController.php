<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class registrationController extends Controller
{
 public function index(){
    return view('layouts.form');
 }
 public function register(Request $request){
   // server side validation
   $request->validate(
      [
         'name'=>'required',
         'email'=>'required|email',
         'password'=>'required|confirmed',
         'password_confirmation'=>'required'
      ]
      );
 print_r($request->all());
 }
}
