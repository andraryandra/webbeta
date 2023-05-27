<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function detailpartner()
    {
        return view('/detailpartner');
    }

    public function about()
    {
        return view('/about');
    }

    public function partnership()
    {
        return view('layouts.partials.partnership');
    }

    public function detailkelas()
    {
        return view('/detailkelas');
    }

    public function termofservices()
    {
        return view('/termofservices');
    }
}
