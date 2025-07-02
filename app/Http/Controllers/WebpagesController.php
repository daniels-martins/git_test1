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
        $companyPhone = '0430458934';

        return view('contact', compact('companyPhone'));
    }

    public function about()
    {
        return 'about page';
    }
}
