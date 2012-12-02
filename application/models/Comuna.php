<?php

class Comuna extends Eloquent
{
	public static $table = 'Comuna';

	public function Testimonios() 
	 {  
	 	return $this->has_many('Testimonio');
	 } 


}
