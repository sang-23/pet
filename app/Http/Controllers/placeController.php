<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\City;


class placeController extends Controller
{
    public function getCities(Request $request, $state)
    {
        $cities = City::where('state', $state)->pluck('name', 'id');
        return response()->json($cities);
    }
}
