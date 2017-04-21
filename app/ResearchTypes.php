<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ResearchTypes extends Model
{
	//Caso queira mudar o nome da tabela
	//protected $table = 'nomeDaTabela';
	
	public function index()
	{
	  $research = ResearchTypes::all();   
	  return $research;
	} 
    
}
?>