<?php

namespace App\Http\Controllers;
use App\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\MainController;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('profile');
    }
    public function profile()
    {
        return view('profile');
    }
    public function store(Request $request){
        if($request->hasFile('image')){
            $request->image->store('public/usinf');
            return view("profile");
        }
        
        return $request->all();    
    }
}
