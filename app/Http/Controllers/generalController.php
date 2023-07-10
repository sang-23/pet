<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\breedc;
use App\Models\petc;

class generalController extends Controller
{
    public function store(Request $request)

    
    {

        
        $pets_category = new petc;
        $pets_category->pet_type="cat";
        $pets_category->save();

        $pets_category = new petc;
        $pets_category->pet_type="dog";
        $pets_category->save();

        $breeds_info = new breedc;

        $breeds_info->breed_name="labrador";

        $breeds_info->save();

      
      
    }

}
