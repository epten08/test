@extends('layouts.app')

@section('content')
<a href="/tractors" class="btn btn-default">Go Back</a>
    <h1>{{$tractor->Brand}}</h1>
    <div>
        {!!$tractor->Model!!}
    </div>
    
   
                
@endsection