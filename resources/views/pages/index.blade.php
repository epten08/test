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
                                <th>Brach ID</th>
                                <th>Tractor ID</th>
                                <th>Driver Name</th>
                                <th>Driver Surname</th>
                                <th>Driver LicenseNO</th>

                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $data)
                            <tr>
                                <td>{{ $data->branch_id }}</td>
                                <td>{{ $data->tractor_id }}</td>
                                <td>{{ $data->name}}</td>
                                <td>{{ $data->surname}}</td>
                                <td>{{ $data->licenseNo}}</td>
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
