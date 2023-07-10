<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customers_info;
use App\Models\Pet_info;
class CustomerData extends Controller
{
    //
    // public function index(){
    //     $customers_info = Customers_info::with('pet_info')->get();
    //     $pet_info = Pet_info::with('customers_info')->get();
    //     return view('trials',compact('customers_info','pet_info'));
    // }
}
