<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OfertaController extends Controller
{
    public function getIndex(){
	   return view('oferta');
	}
}
