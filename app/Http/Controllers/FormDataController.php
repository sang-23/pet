<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customers;
use App\Models\pets;
use App\Models\breedc;
use App\Models\petc;

class FormDataController extends Controller
{
    public function store(Request $request)

   

    {
    


        $pets_category = petc::where('pet_type', $request->input('pet_type'))->first();
        $pet_type_id = $pets_category ? $pets_category->pet_typeid : null;

        $breeds_info = breedc::where('breed_name', $request->input('breed_name'))->first();
 $pet_breedid = $breeds_info  ? $breeds_info ->breed_id : null;



        $customers_info = new Customers;
        $customers_info->customers_fname=$request['customers_fname'];
        $customers_info->customers_lname=$request['customers_lname'];
        $customers_info->customers_phone=$request['customers_phone'];
        $customers_info->customers_email=$request['customers_email'];
        $customers_info->customers_address=$request['customers_address'];
        $customers_info->customers_country=$request['customers_country'];
        $customers_info->customers_city=$request['customers_city'];
        $customers_info->customers_state=$request['customers_state'];
     

        $customers_info->save();
        


        $pet_info = new pets;

        $pet_info->pet_name=$request['pet_name'];
        $pet_info->pet_bday=$request['pet_bday'];
        $pet_info->pet_gender=$request['pet_gender'];
        $pet_info->pet_parentid = $customers_info->customers_id;
        $pet_info->pet_type_id = $pet_type_id; 
        $pet_info->pet_breedid = $pet_breedid; 
    

        $pet_info->save();
      
       
        


        


        // Redirect the user after successful form submission
        return redirect()->back()->with('success', 'Form submitted successfully!');
    }

}
