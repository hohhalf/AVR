@extends('base');

@section('header');
	<h2>Список отключений</h2>
	<hr/>
@stop

@section('content');
	<table class="main-table">
		<th>
			<td>Дата/Время</td>
			<td>Диспетчерское наименование</td>
			<td>Состояние</td>
		</th>
		@foreach

		@endforeach
	</table>
@stop

@section('footer');
@stop