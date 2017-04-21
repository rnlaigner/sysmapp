<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PaperType extends Model
{
	public function papers(){
			return $this->belongsToMany('App\Paper')->withTimestamps();
	}
}
