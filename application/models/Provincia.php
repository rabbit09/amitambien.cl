<?php

class Provincia extends Eloquent
{
	public static $table = 'Provincia';

	public function Comunas() 
	 {  
	 	return $this->has_many('Comuna'); 
	 } 


}

