@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>Tractors Info</h4>
                </div>
                <div class="card-body">

                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>Brand</th>
                                <th>Model</th>
                                <th>Reg</th>
                                <th>Markers</th>

                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($tractors as $item)
                            <tr>
                                <td>{{ $item->brand }}</td>
                                <td>{{ $item->model}}</td>
                                <td>{{ $item->reg }}</td>
                                <td>{{ $item->markers }}</td>
                                <td>{{ $item->section }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection