<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vendors;
use App\Models\User;
class VenderController extends Controller
{
    
    public function store(Request $request)

    
    {
$users  = new User;

        $vendors= new Vendors;
        $vendors->vendors_fname=$request['vendors_fname'];
        $vendors->vendors_lname=$request['vendors_lname'];
        $pet_info->pet_parentid = $customers_info->customers_id;
        $pet_info->pet_parentid = $customers_info->customers_id;
        $pet_info->pet_parentid = $customers_info->customers_id;
       
        $vendors->vendors_address=$request['vendors_address'];
        $vendors->vendors_city=$request['vendors_city'];
        $vendors->vendors_state=$request['vendors_state'];
        $vendors->vendors_phone=$request['vendors_phone'];
        $vendors->vendors_avatar=$request['vendors_avatar'];
        $vendors->save();
        
        return redirect()->back()->with('success', 'Form submitted successfully!');
    }
}
