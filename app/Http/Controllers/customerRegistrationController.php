<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\models\Table_customers;
use App\Models\Table_customers as ModelsTable_customers;

use function PHPUnit\Framework\isNull;

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
    $customer->email = $request['email'];
    $customer->state = $request['state'];
    $customer->country = $request['country'];
    $customer->dob = $request['dob'];
    $customer->gender = $request['gender'];
    $customer->password = md5($request['password']);
    $customer->save();
   return redirect('customer/view');
   }
 public function view(){
  $customers = ModelsTable_customers::all();
  $data = compact('customers');
  return view('layouts.customer-view')->with($data);
 }
 public function delete($id)
 {

   $customer = ModelsTable_customers::find($id);
   if(isNull($customer)){
    $customer->delete();
   }
   return redirect()->back();
 }
}
