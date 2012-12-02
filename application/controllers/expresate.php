<?php

class Expresate_Controller extends Base_Controller {



	// Mostrar eleccion de agresores
	public function get_paso1()
	{
		

		// Borrar id de experiencia, para no mezclar datos
		if (Session::has('exp_id'))
		{
			Session::forget('exp_id');
		}

		return View::make('home.paso1');

	}



	// Mostrar eleccion de amenazas
	public function get_paso2( $var ) 
	{
		// Mostrar eleccion de amenazas

		if ((Session::has('exp_id') == false) && ($var > 0)) 
		{
    		 
			$new_experiencia = array(
							'ip_address' => $_SERVER['REMOTE_ADDR'],
							 'agresor_id' => $var
							);

			$experiencia = new Testimonio($new_experiencia);
			$experiencia->save();

			Session::put('exp_id', $experiencia->id);

			return View::make('home.paso2');

		}	

		else
		{
			return View::make('home.paso1');
		
		}


	}



		public function get_paso3($var)
		{

		if (Session::has('exp_id') && $var > 0)
			{
				$experiencia_id = Session::get('exp_id');

				$experiencia = Testimonio::find($experiencia_id);

				if (!$experiencia) return Response::error(404);

				$experiencia->amenaza_id = $var;

				$experiencia->save();

				Session::put('experiencia', $experiencia );

				//Formatea el array para el select
				$comunaList = Comuna::order_by('nombre') -> get();
				$comunaArray = array('0' => 'Seleccione');

				foreach ($comunaList as $comuna ):
					
					$comunaArray[$comuna->id] = $comuna->nombre;

				endforeach;

				return View::make('home.paso3')-> with('comunasSelect',$comunaArray);
			}
		else
			{
				//retorno pagina de inicio
				return Redirect::to('/');
			}
			
		}



		public function post_paso3()
		{

		if (Session::has('experiencia'))
		{
			$experiencia = 	Session::get('experiencia');			

			$experiencia->edad = Input::get('edad');
			$experiencia->relato = Input::get('relato');
			$experiencia->sexo = Input::get('sexo');
			$experiencia->comuna_id = Input::get('comuna');
			$experiencia->nombres = Input::get('nombres');
			$experiencia->apellido_paterno = Input::get('apellido_paterno');
			$experiencia->apellido_materno = Input::get('apellido_materno');
			$experiencia->fono = Input::get('fono');
			$experiencia->correo = Input::get('correo');

			$experiencia->save();

			return Redirect::to('/expresate/gracias');
		}
		else
		{
			//retorna Pagina Inicio
			return View::make('home.index');
		}




		}


		public function get_gracias()
		{

			return View::make('home.gracias');

		}





}