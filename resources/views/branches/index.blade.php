@extends('layouts.app')

@section('content')
    <h1>Branches</h1>
    @if(count($branches) > 0)
        @foreach($branches as $branch)
            <div class="well">
                <div class="row">
                    <div class="col-md-8 col-sm-8">
                        <h3><a href="/branches/{{$branch->id}}">{{$branch->name}}</a></h3>
                    </div>
                </div>
            </div>
        @endforeach
      
    @else
        <p>Not found</p>
    @endif
@endsection