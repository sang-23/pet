<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Vendors;
use App\Models\User;

class ProfileController extends Controller
{
    public function edit()
    {
        $user = Auth::user();
       
        $vendors = Vendors::where('userven_id', $user->user_id)->first();

        return view('profile', ['user' => $user,
        'vendors' => $vendors,]);
    }

    public function update(Request $request)
    {
        $user = Auth::user();
       
        // Update user data
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->password = $request->input('password');
        
        // Update other user fields as needed
        $user->save();

        // Update vendor data
       

       
        $vendors = Vendors::where('userven_id', $user->user_id)->first();
        $vendors->vendors_uname = $user->name;
        $vendors->vendors_email =$user->email;
        $vendors->vendors_password =$user->password;
        $vendors->vendors_city = $request->input('vendors_city');
        $vendors->vendors_address = $request->input('vendors_address');
        $vendors->vendors_fname = $request->input('vendors_fname');
        $vendors->vendors_lname = $request->input('vendors_lname');
        $vendors->vendors_phone = $request->input('vendors_phone');
        $vendors->vendors_avatar = $request->input('vendors_avatar');
        $vendors->vendors_state = $request->input('vendors_state');
        // Update other vendor fields as needed
        $vendors->save();
       
        return redirect()->back()->with('success', 'Profile updated successfully');
    }
}
