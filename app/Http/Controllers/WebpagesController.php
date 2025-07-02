<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebpagesController extends Controller
{
    public function welcome()
    {
    return view('welcome');
        
    }


    public function contact()
    {
    return view('contact');
        
    }

    public function about()
    {
    return 'about page';
        
    }
}
