<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class HelloController extends Controller
{
    //
    function hello(){
		
		$records=array(
			'name'=>'Rahul',
			'email'=>'rahul@gmail.com',
			'age'=>30
		);
		
		return view('hello',array('data'=>$records,'uid'=>1));
	
	}	
}