<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Templates;
class TemplateData extends Controller
{
    //
    // public function uploadImage(Request $request)
    // {
    //     $file = $request->file('image');
    //     // $fileName = $file->getClientOriginalName();
    //     // $fileType = $file->getClientOriginalExtension();
    //     $fileData = file_get_contents($file->getRealPath());

    //     $image = new Templates();
    //     // $image->file_name = $fileName;
    //     // $image->file_type = $fileType;
    //     $image->templates_image = $fileData;
    //     $image->save();

    //     return redirect()->back()->with('success', 'Image uploaded successfully.');
    // }

    // public function showCarousel()
    // {
    //     $templates = Templates::all();
    //     print_r($templates);
    //     die;
    //     return view('trials', compact('templates'));

    // }
    // public function showCarousel()
    // {
    //     $templates = Templates::all();
     
    //     return view('trials', ['templates' => $templates]);
    // }
}
