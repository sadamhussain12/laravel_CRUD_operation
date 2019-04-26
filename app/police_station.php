<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;
class police_station extends Model
{
    public $timestampes =false;
	public $updated_at= false;
	public $created_at= false;
	
	
	 //assessors
	 public function getLocationAttribute($value) {
		 return strtoupper($value);
	 }
}

   