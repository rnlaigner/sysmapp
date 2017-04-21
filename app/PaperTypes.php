<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PaperTypes extends Model
{
	//Caso queira mudar o nome da tabela
	//protected $table = 'nomeDaTabela';
	
	public function index()
	{
	  $types = PaperTypes::all();   
	  return $types;
	} 
    
}
?>