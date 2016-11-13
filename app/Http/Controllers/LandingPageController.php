<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\TopBar;
use App\Slider;
use App\HowItDo;
use App\PeopleSay;


class LandingPageController extends Controller
{
    //

    public function index(){



    	$menuitems=TopBar::all();
    	$sliders=Slider::all();
    	$how_it_dos = HowItDo::all();
    	$people_says = PeopleSay::all();



    	    return view('home',compact('menuitems','sliders','how_it_dos','people_says'));


    }
}

