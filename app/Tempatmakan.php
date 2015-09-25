<?php

namespace App;
use app\User;
use app\Tempatmakan;
use Illuminate\Database\Eloquent\Model;


class Tempatmakan extends Model
{
    //
	protected $table = 'tempatmakan';

	public function user(){
		return $this->belongsToMany('User');
	}
}
