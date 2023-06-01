<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    // public function daftarmitra()
    // {
    //     return view('layouts.partials.daftarmitra');
    // }

    public function detailpartner()
    {
        return view('/detailpartner');
    }

    public function about()
    {
        return view('layouts.partials.about');
    }

    public function partnership()
    {
        return view('layouts.partials.partnership');
    }

    public function detailkelas()
    {
        return view('layouts.partials.detailkelas');
    }

    public function termofservices()
    {
        return view('/termofservices');
    }
    
}
