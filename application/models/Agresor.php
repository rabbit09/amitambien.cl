<?php

class Agresor extends Eloquent
{
	public static $table = 'Agresor';


	public function Testimonios() 
	 {  
	 	return $this->has_many('Testimonio');
	 } 

}
