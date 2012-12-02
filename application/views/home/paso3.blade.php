@layout('default')

@section('content')

<div id='todo'>

<div style="width:800px;align-text:center;margin:80px;">
{{ Form::open('expresate/paso3') }}






</br>
</br>
</br>
Cuéntanos tu historia!  Tu relato puede ayudar a muchos otros y estarás haciendo crecer esta comunidad.
Eso si preocupate de no dar ninguna info personal, como un relato de autoficcion, cambia los nombres propios, 
los nombres de lugares, etc. tu integridad es lo más importante. 
</br>
</br>
<table>
<tr>
	<td colspan="2">{{ Form::label('relato', 'Relato') }} <td> 
<tr>
<tr>
	<td colspan="2"> {{ Form::textarea('relato') }}<td> 
<tr>

<tr>
	<td>{{ Form::label('edad', 'Edad') }}</td>
	<td>{{ Form::number('edad') }}</p> </td>
</tr>

<tr>
	<td>{{ Form::label('sexo', 'Masculino') }}
	{{ Form::radio('sexo', 'M')  }}</td>
	<td>{{ Form::label('sexo', 'Femenino') }}
	{{ Form::radio('sexo', 'F')  }}	</td>
</tr>
<table>
</br>
</br>
</br>
Involúcrate! Solo señalando tu comuna ya estás luchando contra el maltratato infanto-juvenil. 
Info absolutamente confidencial, haremos reportes estadisticos para que los organismos preocupados por la infancia 
puedan ir evaluando y tomando acciones que ayuden a disminuir los abusos en el lugar donde vives.
</br>
</br>
<table>
<tr>
	<td> 	{{ Form::label('comuna', 'Comuna')}}  </td>
	<td>	{{ Form::select('comuna',$comunasSelect) }} </td>
</tr>
<table>
</br>
</br>
</br>

Te encuentras en una situación limite? No sabes que hacer?
 Haz valer TUS DERECHOS. No dudes en pedir ayuda a los especialistas, 
 ellos te ayudaran a enfrentar la situación. Los campos no son obligatorios, 
 la info es absolutamente confidencial, solo asegurate que te puedan ubicar.

</br>
</br>
</br>

<table>
<tr>
<td>{{ Form::label('nombres', 'Nombres')}} </td>
<td>{{ Form::text('nombres') }}</td>
</tr>
<tr>
<td>{{ Form::label('apellido_paterno', 'Apellido Paterno')}} </td>
<td>{{ Form::text('apellido_paterno') }}</td>

<tr>
<td>{{ Form::label('apellido_materno', 'Apellido Materno')}} </td>
<td>{{ Form::text('apellido_materno') }}</td>
<tr> 
<td>{{ Form::label('fono', 'Telefono')}} </td>
<td>{{ Form::telephone('fono') }}</td>
</tr>
<tr>
<td>{{ Form::label('correo', 'Correo Electronico')}} </td>
<td>{{ Form::email('correo') }}</td>
</tr>
</table>
</br>
 </br>
 {{ Form::submit('Agrega tu Relato') }}
 {{ Form::close() }} 
 




</div>
</div>

@endsection