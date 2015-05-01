@extends('layouts.main')

@section('content')
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">{{ $club->name }}</h3>
                </div>
                <div class="box-body">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="box box-solid">
                                <div class="box-header">
                                    <h3 class="box-title">Coaches</h3>
                                </div>
                                <div class="box-body">
                                    <table class="table table-bordered table-hover">
                                        <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Category</th>
                                            <th>Email</th>
                                            <th>Phone</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($club->coaches as $coach)
                                            <tr>
                                                <td><a href="{{ url('coaches/' . $coach->id .'/edit') }}">{{ $coach->person->getFullName() }}</a></td>
                                                <td></td>
                                                <td>{{ $coach->person->email }}</td>
                                                <td>{{ $coach->person->phone }}</td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>
                                <div class="box-footer">
                                    <a href="{{url('coaches/create')}}" class="btn btn-success">New coach</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-xs-12">
                            <div class="box box-solid">
                                <div class="box-header">
                                    <h3 class="box-title">Gymnasts</h3>
                                </div>
                                <div class="box-body">
                                    <table class="table table-bordered table-hover">
                                        <thead>
                                        <tr>
                                            <th>Name</th>

                                            <th>Email</th>
                                            <th>Phone</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($club->gymnasts as $gymnast)
                                            <tr>
                                                <td><a href="{{ url('gymnasts/' . $gymnast->id .'/edit') }}">{{ $gymnast->person->getFullName() }}</a></td>

                                                <td>{{ $gymnast->person->email }}</td>
                                                <td>{{ $gymnast->person->phone }}</td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>
                                <div class="box-footer">
                                    <a href="{{url('gymnasts/create')}}" class="btn btn-success">New gymnast</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-xs-12">
                            <div class="box box-solid">
                                <div class="box-header">
                                    <h3 class="box-title">Judges</h3>
                                </div>
                                <div class="box-body">
                                    <table class="table table-bordered table-hover">
                                        <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Category</th>
                                        </tr>
                                        </thead>
                                    </table>
                                </div>
                                <div class="box-footer">
                                    <button class="btn btn-success">New judge</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
@endsection