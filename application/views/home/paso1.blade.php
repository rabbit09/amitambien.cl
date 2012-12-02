@layout('default')

@section('content')

<div id="todo">
   
	<div id="p01">
	     <center>
	     <b>Tu relato es tan importante como las historias que acabas de leer</b>
	     		<h2>¿Con qui&eacute;n tuviste un problema? </h3>
	     </center>


	    <ul>
	     <?php

			$agresorList = Agresor::order_by('id') -> get();
			
			foreach ($agresorList as $agresor ):

		
			echo '<li><h2><a  href="/expresate/paso2/'.$agresor->id.'">'.$agresor->nombre.'<a/><h2></li>';       
		

			endforeach;
		?>

		</ul>


	</div>
</div>
@endsection
