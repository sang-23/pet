<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Vendors;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class AuthController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function login(Request $request)
{
    $credentials = $request->validate([
        'email' => 'required|email',
        'password' => 'required',
    ]);

    if (Auth::attempt($credentials)) {
        return redirect()->route('venderform');
    }

    return redirect()->route('login')->with('error', 'Invalid login credentials');
}

    public function showRegistrationForm()
    {
        return view('auth.register');
    }

    public function register(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|confirmed',
        ]);

        $validatedData['password'] = bcrypt($request->password);

        $user = User::create($validatedData);

        $vendors = new Vendors();
        $vendors->userven_id = $user->user_id;

    // Set vendor-specific fields if applicable
   


        Auth::login($user);

        return redirect()->route('venderform');
    }

    public function logout()
    {
        Auth::logout();

        return redirect()->route('login');
    }

    public function showProfileForm()
    {
        $user = Auth::user();
    return view('venderform', compact('user'));
       
    }

    public function store(Request $request)
    {
        // Process and save the submitted profile data to another table
       

        $user = Auth::user();

        // Create a new vendor record
        $vendors = new Vendors();
        $vendors->userven_id = $user->user_id;
        $vendors->vendors_uname = $user->name;
        $vendors->vendors_email = $user->email;
        $vendors->vendors_password = $user->password;
     
        $vendors->vendors_city = $request->input('vendors_city');
        $vendors->vendors_address = $request->input('vendors_address');
        $vendors->vendors_fname = $request->input('vendors_fname');
        $vendors->vendors_lname = $request->input('vendors_lname');
        $vendors->vendors_phone = $request->input('vendors_phone');
        $vendors->vendors_avatar = $request->input('vendors_avatar');
        $vendors->vendors_state = $request->input('vendors_state');
        // Add more fields as per your requirements
    
        $vendors->save();
        // Redirect to success page or perform any additional logic

        return redirect()->route('profile.edit');
    }
}
