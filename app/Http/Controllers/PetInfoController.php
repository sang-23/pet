<?php

namespace App\Http\Controllers;
use App\Models\PetInfo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class PetInfoController extends Controller
{
    //
   

    public function show($petTypeId)
    {
        $totalCount = PetInfo::where('pet_type_id', $petTypeId)->count();
    
        return response()->json(['totalCount' => $totalCount]);
    }

}
