<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
	//one page wonder landing page
    public function index()
	{				
		return view('home.index');  		
	}

	//php quick test page
	public function phpQuickTest()
	{				
		return view('home.phpQuickTest');  		
	}
}
