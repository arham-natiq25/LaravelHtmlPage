<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return view('frontend.home');
    }
    public function upload(Request $request)
    {

        $request->file('image')->store('Upload');
        return view('upload');
    }
}
