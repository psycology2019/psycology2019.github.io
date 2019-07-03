<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Lidmagnituser extends Model
{
	protected $table = "Lidmagnituser";
	
    protected $fillable = [
	 'name',
	 'email',
	 'phone'
	];
}
