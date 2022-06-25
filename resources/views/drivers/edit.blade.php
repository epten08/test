@extends('layouts.app')

@section('content')
    <h1>Edit Driver</h1>
    {!! Form::open(['action' => ['DriversController@update',$driver->id],'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
        <div class="form-group">
            {{Form::label('name', 'Name')}}
            {{Form::text('name', '$driver->name', ['class' => 'form-control', 'placeholder' => 'Name'])}}

            {Form::label('surname', 'Surname')}}
            {{Form::text('surname', '$driver->surname', ['class' => 'form-control', 'placeholder' => 'Surname'])}}

            {Form::label('DOB', 'DOB')}}
            {{Form::text('DOB', 'driver->DOB', ['class' => 'form-control', 'placeholder' => 'DOB'])}}

            {Form::label('licenseNo', 'licenseNo')}}
            {{Form::text('licenseNo', '$driver->licenseNo', ['class' => 'form-control', 'placeholder' => 'markers'])}}
        </div>
        {{Form::hidden('_method','PUT')}}
        {{Form::submit('Submit', ['class'=>'btn btn-primary'])}}
    {!! Form::close() !!}
@endsection