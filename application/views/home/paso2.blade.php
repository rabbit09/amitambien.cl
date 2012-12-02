@layout('default')

@section('content')

<ul>


<div id="todo">
   
	<div id="p01">
	     
	     <h3>¿Que cosa te molestan?</h3>

	     </br>
	     </br>

	     <ul>
		<?php

					$amenazaList = Amenaza::order_by('id') -> get();
					
					foreach ($amenazaList as $amenaza ):

					echo '<h2> <li><a  href="/expresate/paso3/'.$amenaza->id.'">'.$amenaza->nombre.'<a/></li></h2>';       
			
					endforeach;

		?>
		</ul>
	</div>
</div>





</ul>



@endsection