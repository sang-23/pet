<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Website extends Controller
{
    public function index(Request $request){
		$data['country']=DB::table('country')->orderBy('country','asc')->get();
		return view('form',$data);
	}
	
	public function getState(Request $request){
		$cid=$request->post('cid');
		$state=DB::table('state')->where('country_id',$cid)->orderBy('state','asc')->get();
		$html='<option value="">Select State</option>';
		foreach($state as $list){
			$html.='<option value="'.$list->state_id.'">'.$list->state.'</option>';
		}
		echo $html;
	}
	
	public function getCity(Request $request){
		$sid=$request->post('sid');
		$city=DB::table('city')->where('states_id',$sid)->orderBy('city','asc')->get();
		$html='<option value="">Select City</option>';
		foreach($city as $list){
			$html.='<option value="'.$list->city_id.'">'.$list->city.'</option>';
		}
		echo $html;
	}
}
