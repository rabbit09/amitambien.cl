<?php

class Amenaza extends Eloquent
{
	public static $table = 'Amenaza';


	public function Testimonios() 
		 {  
		 	return $this->has_many('Testimonio');
		 } 

}
