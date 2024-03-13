<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Slider;



class HomeController extends Controller
{
    function __construct()
    {
        // 
    }
    
    public function home()
    {
        $sliders = Slider::get()->all();
        
        return view('welcome',compact('sliders'));
    }


    

}