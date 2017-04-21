<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Paper extends Model
{
	//Caso queira mudar o nome da tabela
	//protected $table = 'nomeDaTabela';
	
	public function index()
	{
	  $papers = Paper::all();   
	  return $papers;
	}
	
	public function papertypes(){
		return $this->belongsToMany('App\PaperType')->withTimestamps();
	}  
    
}
?>