<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Program_releaseController extends Controller
{
    public function getIndex(){
	   return view('program_release');
	}
}
