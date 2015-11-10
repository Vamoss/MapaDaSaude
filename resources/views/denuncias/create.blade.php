@extends('app')

@section('content')
	<h1>Faça uma denúncia</h1>

	{!! Form::open(['url'=>'denuncias']) !!}
		<div class="form-group">
			{!! Form::label('tipo', 'Tipo:', ['class' => 'col-sm-2 control-label']) !!}
            <div class="col-sm-10">
				{!! Form::text('tipo', null, ['class' => 'form-control']) !!}
			</div>
		</div>
		<div class="form-group">
			{!! Form::label('posto', 'Posto:', ['class' => 'col-sm-2 control-label']) !!}
            <div class="col-sm-10">
				{!! Form::text('posto', null, ['class' => 'form-control']) !!}
			</div>
		</div>
		<div class="form-group">
			{!! Form::label('data', 'Data:', ['class' => 'col-sm-2 control-label']) !!}
            <div class="col-sm-10">
				{!! Form::input('date', 'data', date('Y-m-d'), ['class' => 'form-control']) !!}
			</div>
		</div>
		<div class="form-group">
			{!! Form::submit('Enviar', ['class' => 'btn btn-primary form-control']) !!}
		</div>
	{!! Form::close() !!}

	@if ($errors->any())
		<ul class="alert alert-danger">
			@foreach ($errors->all() as $error)
				<li>{{ $error }}</li>
			@endforeach
		</ul>
	@endif
@stop