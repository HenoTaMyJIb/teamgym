@extends('layouts.main')

@section('content')
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">Gymnasts</h3>
                </div>
                <div class="box-body">
                    <table class="table table-bordered table-hover data-table">
                        <thead>
                        <tr>
                            <th>Name</th>
                            <th>Club</th>
                            <th>Code</th>
                            <th>Date of birth</th>
                            <th>Gender</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Address</th>
                        </tr>
                        </thead>
                        @foreach ($gymnasts as $gymnast)
                            <tr>
                                <td><a href="{{ url('gymnasts/'.$gymnast->id.'/edit') }}">{{ $gymnast->person->getFullName() }}</a></td>
                                <td>{{ $gymnast->person->gymnast->club->name }}</td>
                                <td>{{ $gymnast->person->code }}</td>
                                <td>{{ $gymnast->person->birth_day }}</td>
                                <td>{{ $gymnast->person->gender }}</td>
                                <td>{{ $gymnast->person->email }}</td>
                                <td>{{ $gymnast->person->phone }}</td>
                                <td>{{ $gymnast->person->address }}</td>
                            </tr>
                        @endforeach
                    </table>
                </div>
                <div class="box-footer">
                    <div class="row">
                        <div class="col-xs-12">
                            <a href="{{url('gymnasts/create')}}" class="btn btn-success pull-right">New gymnast</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
