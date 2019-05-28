<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{   
    /* Controlador de paginas estaticas */
    public function index()
    {
        return view('public.pages.index');
    }

    public function contact()
    {
        return view('public.pages.contact');
    }

    public function about()
    {
        return view('public.pages.about');
    }
}
