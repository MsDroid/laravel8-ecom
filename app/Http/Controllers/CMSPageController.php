<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CMSPageController extends Controller
{
    //
    function index(){
	 
		return view('index');
	}
	
	
	
	function about(){
		return view('about');
	}
	
}