<?php

namespace App\Http\Controllers;

use App\Lidmagnit;
use App\Mail\MailClass;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;


class LidmagnitController extends Controller
{
    public function getIndex(){
	   return view('lidmagnit');
	}
	
	public function postIndex()
    {
      // dd($_POST);
		$name=$_POST['name'];
		$email=$_POST['email'];
		$phone=$_POST['phone'];
		$obj=new lidmagnit;
		$obj->name=$name;
        $obj->email=$email;
		$obj->phone=$phone;
		$obj->save();
		
		Mail::to($email=$_POST['email'])->send(new MailClass());
		
		//return redirect('/lidmagnit');
		
		  return response()->json([
            'result' => 'success',
            'post'=>'Программа отправлена на электронную почту, на введенный Вами email!'
        ]);

    }

	
}
