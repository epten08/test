@extends('layouts.app')
@section('content')
<div class="container">

    <div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>RELATIONSHIPS TABLE</h4>
                </div>
                <div class="card-body">

                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                
                                <th>Branch Name</th>
                                <th>Branch ID</th>
                                <th>Driver Name</th>
                                <th>Driver Surname</th>
                                <th>Driver LicenseNO</th>

                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $data)
                            @foreach($data->drivers as $driver)
                            <tr>
                                <td>{{ $data->name }}</td>
                                <td>{{ $data->id }}</td>
                                <td>{{ $driver->name}}</td>
                                <td>{{ $driver->surname}}</td>
                                <td>{{ $driver->licenseNo}}</td>
                            </tr>
                            
                            @endforeach
                            @endforeach
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
