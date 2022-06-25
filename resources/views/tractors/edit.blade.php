@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">

            @if (session('status'))
                <h6 class="alert alert-success">{{ session('status') }}</h6>
            @endif

            <div class="card">
                <div class="card-header">
                    <h4>Edit & Update Tractors
                        <a href="{{ url('tractors') }}" class="btn btn-danger float-end">BACK</a>
                    </h4>
                </div>
                <div class="card-body">

                    <form action="{{ url('update/'.$tractor->id) }}" method="POST">
                        @csrf
                        @method('PUT')

                        <div class="form-group mb-3">
                            <label for="">Brand</label>
                            <input type="text" name="name" value="{{$tractor->brand}}" class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Model</label>
                            <input type="text" name="email" value="{{$tractor->model}}" class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Reg</label>
                            <input type="text" name="course" value="{{$tractor->reg}}" class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Markers</label>
                            <input type="text" name="section" value="{{$tractor->markers}}" class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <button type="submit" class="btn btn-primary">Update Info</button>
                        </div>

                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection