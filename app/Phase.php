<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Phase extends Model
{
	//Caso queira mudar o nome da tabela
	//protected $table = 'nomeDaTabela';
	
	public function index()
	{
	  $phase = Phase::all();   
	  return $phase;
	} 
    
}
?>