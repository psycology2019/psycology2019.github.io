<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ConsultationController extends Controller
{
    public function getIndex(){
	   return view('consultation');
	}
}
