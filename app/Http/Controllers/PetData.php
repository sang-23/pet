<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Pet_info;
use App\Models\Customers_info;
use Illuminate\Support\Facades\DB;

use App\models\User;
use App\models\country;
use App\Notifications\VaccinationAlert;
use Illuminate\Support\Facades\Notification;

=======
use App\Models\User;
use App\Notifications\VacinationAlert;
use Illuminate\Support\Facades\Notification;
use App\Models\Templates;


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

        $pets_info = Pet_info::join('customers_info', 'pet_info.pet_parentid', '=', 'customers_info.customers_id')->join('pets_category', 'pet_info.pet_type_id', '=', 'pets_category.pet_typeid')->join('breeds_info', 'pet_info.pet_breedid', '=', 'breeds_info.breed_id')->get();
        $pet_info =$pets_info->reverse();
        return view('trials',compact('pet_info'));


=======
        $pets_info = Pet_info::join('customers_info', 'pet_info.pet_parentid', '=', 'customers_info.customers_id')->get();
        $pet_info =$pets_info->reverse();
        $templates = Templates::all();
        // echo "<pre>";
        // print_r($templates);
        // die;
        // echo "</pre>";
        return view('trials',['pet_info'=>$pet_info,'templates' => $templates]);
         

    }
    
//     public function show()
// {
//     $startDate = now()->subWeeks(2); // Example start date
//     return view('trials', compact('startDate'));
// }


public function notify(){
    $user=User::first();
    Notification::send($user,new VaccinationAlert);
=======
// public function showCarousel()
// {
//     $templates = Templates::all();
 
//     return view('trials', ['templates' => $templates]);
// }

public function notify(){
    $user=User::first();
    Notification::sendNow($user,new VacinationAlert);

    return view('trials');
    

}


}
