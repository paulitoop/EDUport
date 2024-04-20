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

}
