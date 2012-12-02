<?php

class Region extends Eloquent
{
	public static $table = 'Region';

	public function Provincias() 
	 {  
	 	return $this->has_many('Provincia'); 
	 } 



}
