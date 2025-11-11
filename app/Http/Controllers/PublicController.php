<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PublicController extends Controller
{
    public function welcome()
    {
        return view('welcome');
    }

    public function plans()
    {
        return view('public.plans');
    }

    public function features()
    {
        return view('public.features');
    }

    public function demo()
    {
        return view('public.demo');
    }

    public function support()
    {
        return view('public.support');
    }
}
