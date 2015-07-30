@extends('base') @section('content')
<div class="edit-wrapp col-sm-6">


  <h3 class="text-center">Отключение № N.</h3> {!! Form::open(['url' => 'downs\save', 'method' => 'POST', 'name' => 'edit-down-form' , 'class' => 'form-horizontal', 'role' => 'form']) !!}

  <!-- Nav tabs -->
  <ul class="nav nav-tabs" role="tablist">
    <li role="presentation" class="active"><a href="#main-tab" aria-controls="main-tab" role="tab" data-toggle="tab">Основные</a></li>
    <li role="presentation"><a href="#customer-info" aria-controls="customer-info" role="tab" data-toggle="tab">Обесточенные потребители(ПС, ТП, чел)</a></li>
  </ul>

  <!-- Tab panes -->
  <div class="tab-content">
    <div role="tabpanel" class="tab-pane active" id="main-tab">

      <div class="form-group col-sm-12">
        {!! Form::label('disp-object', 'Наименование объекта:', ['class' => 'control-label col-sm-3']) !!}
        <div class="col-sm-8">
          {!! Form::text('disp-object', '',['class' => 'form-control'] ) !!}
        </div>
      </div>

      <div class="form-group col-sm-12">
        {!! Form::label('down-date-time','Дата/Время отключения:', ['class' => 'control-label col-sm-3']) !!}

        <div class="col-xs-3">
          {!! Form::text('down-date-time', '',['class' => 'form-control'] ) !!}
        </div>
      </div>

      <div class="form-group col-sm-12">
        {!! Form::label('plain-date-time','План включения:', ['class' => 'control-label col-sm-3']) !!}

        <div class="col-xs-3">
          {!! Form::text('plain-date-time', '',['class' => 'form-control'] ) !!}
        </div>
      </div>

      <div class="form-group col-sm-12">
        <h4 class="text-center">Меры по восстановлению электроснабжения:</h4>

        <div class="form-group col-sm-6">
          <h4 class="text-center">Бригады:</h4>

          <div class="form-group col-sm-12">
            {!! Form::label('ovb-amount','ОВБ:', ['class' => 'control-label col-sm-5']) !!}
            <div class="col-xs-4">
              {!! Form::text('ovb-amount', '',['class' => 'form-control'] ) !!}
            </div>
          </div>

          <div class="form-group col-sm-12">
            {!! Form::label('orb-amount','ОРБ:', ['class' => 'control-label col-sm-5']) !!}
            <div class="col-xs-4">
              {!! Form::text('orb-amount', '',['class' => 'form-control'] ) !!}
            </div>
          </div>

          <div class="form-group col-sm-12">
            {!! Form::label('pers-amount','Кол-во человек:', ['class' => 'control-label col-sm-5']) !!}
            <div class="col-xs-4">
              {!! Form::text('pers-amount', '',['class' => 'form-control'] ) !!}
            </div>
          </div>

          <div class="form-group col-sm-12">
            {!! Form::label('tech-amount','Кол-во техники:', ['class' => 'control-label col-sm-5']) !!}
            <div class="col-xs-4">
              {!! Form::text('tech-amount', '',['class' => 'form-control'] ) !!}
            </div>
          </div>




        </div>

        <div class="form-group col-sm-6">
          <h4 class="text-center">Работы:</h4> {!! Form::textarea('works', '', ['class' => 'form-control'] ) !!}
        </div>
      </div>
    </div>


    <div role="tabpanel" class="tab-pane" id="customer-info">
      <div class="form-group col-sm-12">
        {!! Form::label('down-locations', 'Населенные пункты:', ['class' => 'control-label col-sm-3']) !!}
        <div class="col-sm-8">
          {!! Form::text('down-locations', '',['class' => 'form-control'] ) !!}
        </div>
      </div>

      <div class="form-group col-sm-12">
        {!! Form::label('tp-amount', 'Кол-во ТП:', ['class' => 'control-label col-sm-3']) !!}
        <div class="col-sm-2">
          {!! Form::text('tp-amount', '',['class' => 'form-control'] ) !!}
        </div>
      </div>
      <div class="form-group col-sm-12">
        {!! Form::label('customer-amount', 'Кол-во потребителей:', ['class' => 'control-label col-sm-3']) !!}
        <div class="col-sm-2">
          {!! Form::text('customer-amount', '',['class' => 'form-control'] ) !!}
        </div>
      </div>

      <div class="form-group col-sm-12">
        <div class="form-group col-sm-6">

          <div class="form-group col-sm-12">
            <h4 class="text-center">Объекты 1-2 категории:</h4> {!! Form::label('cat12-amount', 'Кол-во объетов:', ['class' => 'control-label col-sm-7']) !!}
            <div class="col-xs-4">
              {!! Form::text('cat12-amount', '',['class' => 'form-control'] ) !!}
            </div>
          </div>

          <div class="form-group col-sm-12">
            {!! Form::textarea('cat12-names', '', ['class' => 'form-control', 'placeholder' => 'Наименования объектов...'] ) !!}
          </div>
        </div>

        <div class="form-group col-sm-6">
          <div class="form-group col-sm-12">
            <h4 class="text-center">Соц. значимые объекты:</h4> {!! Form::label('social-amount', 'Кол-во объетов:', ['class' => 'control-label col-sm-7']) !!}
            <div class="col-xs-4">
              {!! Form::text('social-amount', '',['class' => 'form-control'] ) !!}
            </div>
          </div>

          <div class="form-group col-sm-12">
            {!! Form::textarea('cat12-names', '', ['class' => 'form-control', 'placeholder' => 'Наименования объектов...'] ) !!}
          </div>
        </div>
      </div>

    </div>
  </div>






  {!! Form::close() !!}
</div>


@stop
