@extends('layouts.app')

@section('content')
<div class="container">

<div class="container">
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4>DRIVERS INFO</h4>
            </div>
            <div class="card-body">

                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>Driver ID</th>
                            <th>Driver Name</th>
                            <th>Driver Surname</th>
                            <th>Driver LicenseNO</th>
                            <th>Driver DOB</th>

                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($drivers as $data)
                        <tr>
                            <td>{{ $data->id }}</td>
                            <td>{{ $data->name}}</td>
                            <td>{{ $data->surname}}</td>
                            <td>{{ $data->licenseNo}}</td>
                            <td>{{ $data->DOB}}</td>
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