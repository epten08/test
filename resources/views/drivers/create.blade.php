@extends('layouts.app')

@section('content')
    <h1>Add Driver</h1>
    {!! Form::open(['action' => 'TractorsController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
        <div class="form-group">
            {{Form::label('Brand', 'Brand')}}
            {{Form::text('brand', '', ['class' => 'form-control', 'placeholder' => 'Brand'])}}

            {Form::label('model', 'Model')}}
            {{Form::text('model', '', ['class' => 'form-control', 'placeholder' => 'Model'])}}

            {Form::label('reg', 'Reg')}}
            {{Form::text('reg', '', ['class' => 'form-control', 'placeholder' => 'Reg'])}}

            {Form::label('markers', 'Markers')}}
            {{Form::text('markers', '', ['class' => 'form-control', 'placeholder' => 'markers'])}}
        </div>
        {{Form::submit('Submit', ['class'=>'btn btn-primary'])}}
    {!! Form::close() !!}
@endsection