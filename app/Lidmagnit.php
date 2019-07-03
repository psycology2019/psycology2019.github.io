<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Lidmagnit extends Model
{
    protected $table = "lidmagnit";
	
    protected $fillable = [
	 'name',
	 'email',
	 'phone'
	];
    
}
