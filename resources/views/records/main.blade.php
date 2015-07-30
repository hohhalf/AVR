@extends('base')

@section('header')
	<h2>Список отключений</h2>
	<hr/>
@stop

@section('content')

<div class="table-wrapp">
@include('buttons')
	<p>Общее количество записей = {{$downsCount}}</p>	
	<table class = "main-table table tabled-bordered table-hover">
		<thead>
			<th>Дата/Время</th>
			<th>Диспетчерское наименование</th>
			<th>Состояние</th>
		<tr class="filter_panel">
			<th>
				<div class="input-group">
      				<span class="input-group-addon">
        				<input type="checkbox" aria-label="filt_date" data-col = "Time">
      				</span>
      				{!! Form::text('filt_time',null,['class' => 'form-control', 'placeholder' => 'Фильтр по дате', 'data-col' => 'Time', 'aria-label' => 'filt_date']) !!}
    			</div>
			</th>

			<th>
				<div class="input-group">
      				<span class="input-group-addon">
        				<input type="checkbox" aria-label="filt_dispname" data-col = "DispName">
      				</span>
      				{!! Form::text('filt_dispname',null,['class' => 'form-control', 'placeholder' => 'Фильтр по объекту', 'data-col' => 'DispName', 'aria-label' => 'filt_dispname']) !!}
    			</div>
    		</th>
    		
			<th>
				<div class="input-group">
      				<span class="input-group-addon">
        				<input type="checkbox" aria-label="filt_state" data-col = "Value">
      				</span>
      				{!! Form::text('filt_state',null,['class' => 'form-control', 'placeholder' => 'Фильтр по состоянию', 'data-col' => 'Value', 'aria-label' => 'filt_state']) !!}</th>
    			</div>

		</tr>	
		</thead>
		<tbody>
		@foreach($downsList as $down)
		<tr data-crit="false">
			<td data-col="Time">{{date('d.m.Y / H:i', substr ("$down->Time", 0, -5)) }}</td>
			<td data-col="DispName">{{ $down->DispName }}</td>
			<td data-col="Value">{{ $down->Value }}</td>
		</tr>
		@endforeach
		</tbody>
	</table>
</div>

@stop

@section('footer')
@stop
