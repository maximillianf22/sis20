<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\TempEvent;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function frontPage(){
        $data['events'] = TempEvent::all();
        return view('frontPage', $data);
    }
}
