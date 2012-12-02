<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>	
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />


{{ HTML::style('css/boostrap.min.css') }}
{{ HTML::style('css/estilos.css') }}
{{ HTML::style('css/lightbox.css') }}

{{ Asset::styles() }}

<title> A M&iacute; Tambi&eacute;n - Testimonios Reales como el Tuyo</title>

</head>
<body>
<img src="http://amitambien.cl/img/logo.png"></img>
<div style="width:500px;align:right;padding:0px;">
	<a href='#'>Acerca De </a> |	<a href='#'>Términos & Condiciones</a> 
</div>



	@yield('content')
	 

{{ HTML::script('js/jquery-1.7.2.min.js') }}
{{ HTML::script('js/lightbox.js') }}
{{ Asset::scripts() }}

</body>

</html>
