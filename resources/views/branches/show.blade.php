@extends('layouts.app')

@section('content')
    <a href="/branches" class="btn btn-default">Go Back</a>
    <h1>{{$tractor->name}}</h1>
    @if(!Auth::guest())
        @if(Auth::user()->id == $branches->user_id)
            <a href="/branches/{{$branch->id}}/edit" class="btn btn-default">Edit</a>
            {!!Form::open(['action' => ['BranchesController@destroy', $branch->id], 'method' => 'POST', 'class' => 'pull-right'])!!}
                {{Form::hidden('_method', 'DELETE')}}
                {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
            {!!Form::close()!!}
        @endif
    @endif
@endsection