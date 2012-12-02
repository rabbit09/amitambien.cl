@layout('default')

@section('content')




<div id="gallery">
<?php

$testimonioList = Testimonio::order_by('id')->get();
			foreach ($testimonioList as $testimonio ):
				
			echo '<a style="font-size:small;" href="images/img/'.$testimonio->id.'_large.png" rel="lightbox" title="<small>'.$testimonio->relato.'<b></br>'.$testimonio->cifra.'</b> </br> <p>Fuente: '.$testimonio->fuente.'</p></small>"><img src="images/img/'.$testimonio->id.'.png" title=" "></a>'; 

			endforeach;
?>
	
</div>
	
	<center>     <h1><a href="/expresate/paso1"> ¿T&uacute; tambi&eacute;n tienes una historia?</a></h1> </center>
	



@endsection

		


