@extends('layouts.main')

@section('content')
<div class="row">
    <div class="col-xs-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Clubs</h3>
            </div>
            <div class="box-body">
                <table class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <td>Name</td>
                            <td>E-mail</td>
                            <td>Phone</td>
                            <td>Address</td>
                        </tr>
                    </thead>
                    @foreach ($clubs as $club)
                        <tr>
                            <td><a href="{{ url('clubs/' . $club->slug) }}">{{ $club->name }}</a></td>
                            <td>{{ $club->email }}</td>
                            <td>{{ $club->phone }}</td>
                            <td>{{ $club->address }}</td>
                        </tr>
                    @endforeach
                </table>
            </div>
            <div class="box-footer">
                <div class="row">
                    <div class="col-xs-12">
                        <button class="btn btn-success pull-right">New club</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection