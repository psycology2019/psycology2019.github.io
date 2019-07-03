<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ConfedencialnostController extends Controller
{
    public function getIndex(){
	   return view('confedencialnost');
	}
}
