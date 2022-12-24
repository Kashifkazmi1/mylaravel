<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\models\Table_customers;
use App\Models\Table_customers as ModelsTable_customers;

class customerRegistrationController extends Controller
{
   function index(){
    return view('layouts.registration');
   }
   public function store(Request $request){
    print_r($request->all());
    $customer = new ModelsTable_customers;
    $customer->name = $request['name'];
    $customer->address = $request['address'];
    $customer->state = $request['state'];
    $customer->country = $request['country'];
    $customer->dob = $request['dob'];
    $customer->gender = $request['gender'];
    $customer->password = md5($request['password']);
    $customer->save();

   }

}
