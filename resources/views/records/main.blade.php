@extends('base')

@section('header')
	<h2>Список отключений</h2>
	<hr/>
@stop

@section('content')
	<table cellpadding="10" cellspacing="10" cols="3" border="1" align="center">
		<tr>
			<th>Дата/Время</th>
			<th>Диспетчерское наименование</th>
			<th>Состояние</th>
		</tr>
		@foreach($downsList as $down)
		<tr>
			<td>{{ $down->LogTime }}</td>
			<td>{{ $down->DispName }}</td>
			<td>{{ $down->Value }}</td>
		</tr>
		@endforeach
	</table>
@stop

@section('footer')
@stop
