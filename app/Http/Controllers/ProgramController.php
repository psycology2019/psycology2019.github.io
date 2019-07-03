<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Feedback;
class ProgramController extends Controller
{
    public function getIndex(){
	   return view('program');
	}
}
