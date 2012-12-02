<html>

<HEAD>

	{{ HTML::style('css/boostrap.min.css') }}

	{{ Asset::styles() }}

</HEAD>
<body>

	@yield('content')

	{{ HTML::script('js/jquery.min.js') }}
	{{ HTML::script('js/otros.js') }}


	{{ Asset::scripts() }}
</body>

</html>