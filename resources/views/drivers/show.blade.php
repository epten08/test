@extends('layouts.app')

@section('content')
    <a href="/drivers" class="btn btn-default">Go Back</a>
    <h1>{{$driver->name}}</h1>
    <img style="width:100%" src="/storage/cover_images/{{$post->cover_image}}">
    <br><br>
    <div>
        {!!$driver->surname!!}
        !!$driver->DOB!}
        !!$driver->licenseNO!!}
    </div>
  
    @if(!Auth::guest())
        @if(Auth::user()->id == $driver->user_id)
            <a href="/driverss/{{$driver->id}}/edit" class="btn btn-default">Edit</a>

            {!!Form::open(['action' => ['DriversController@destroy', $driver->id], 'method' => 'POST', 'class' => 'pull-right'])!!}
                {{Form::hidden('_method', 'DELETE')}}
                {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
            {!!Form::close()!!}
        @endif
    @endif
@endsection