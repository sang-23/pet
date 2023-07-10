<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pet_info;
use App\Models\Customers_info;
use Illuminate\Support\Facades\DB;
use App\models\User;
use App\Notifications\VaccinationAlert;
use Illuminate\Support\Facades\Notification;

class PetData extends Controller
{
    //
    // function show()
    // {
    //     $data = Pet_info::all();
    //     return view('trials',['pet_info'=>$data]);
    //     // return view('trials');
    // }
    public function index(){
        $pets_info = Pet_info::join('customers_info', 'pet_info.pet_parentid', '=', 'customers_info.customers_id')->get();
        $pet_info =$pets_info->reverse();
        return view('trials',compact('pet_info'));
    }
    
//     public function show()
// {
//     $startDate = now()->subWeeks(2); // Example start date
//     return view('trials', compact('startDate'));
// }

public function notify(){
    $user=User::first();
    Notification::send($user,new VaccinationAlert);
    return view('trials');
    

}


}
