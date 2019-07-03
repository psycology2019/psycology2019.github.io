<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Program_rankingController extends Controller
{
    public function getIndex(){
	   return view('program_family_ranking');
	}
}
