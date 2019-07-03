<?php

namespace App\Http\Controllers;

use App\Feedback;
use Illuminate\Http\Request;


class ReviewsController extends Controller
{
    public function getIndex(){
	   return view('revies');
	}	
	
	public function postIndex()
    {
      // dd($_POST);
		$name=$_POST['name'];
		$email=$_POST['email'];
		$phone=$_POST['phone'];
		$body=$_POST['body'];
		//$show=$_POST['show'];
		$obj=new feedback;
		$obj->name=$name;
        $obj->email=$email;
		$obj->phone=$phone;
		$obj->body=$body;
		$obj->save();
		return redirect('/revies');
    }
	
	    public function getAll(){
		$feeds=Feedback::where('show', 0)->get();	
		return view('revies', compact('feeds'));
		//foreach ($feeds as $feeds) {
  //echo $feeds->name;
//}

	}
}
