<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function home()
    {
        return view("home");
    }

    // public function reg()
    // {
    //     return view("reg");
    // }

    public function homepage()
    {
        return view("homepage");
    }
    public function newsert()
    {
        return view("newsert");
    }
    public function profile()
    {
        return view("profile");
    }
    public function aut()
    {
        return view("aut");
    }

    // public function events(Request $request)
    // {
    //     $data = $request->all();
    //     dd($request);
    //     return view("events");
    // }   
    public function events(Request $request)

    {
        return view("events");
    }

    public function resume()

    {
        // dd($content = $request->all());
        return view("resume");
    }
    public function programs()

    {
        // dd($content = $request->all());
        return view("programs");
    }
}
