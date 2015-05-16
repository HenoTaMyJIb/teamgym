@extends('layouts.main')

@section('content')
<div class="row">
    <div class="col-xs-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Competitions</h3>
            </div>
            <div class="box-body">
                <table class="table table-bordered table-hover data-table" id="competitions-table">
                    <thead>
                    <tr>
                        <th>Name</th>
                        <th>Start date</th>
                        <th>Address</th>
                        <th>Registration start</th>
                        <th>Registration end</th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($competitions as $competition)
                        <tr>
                            <td><a href="{{url('competitions/' . $competition->id)}}">{{ $competition->name }}</a></td>
                            <td>{{ $competition->start_date }}</td>
                            <td>{{ $competition->address }}</td>
                            <td>{{ $competition->reg_start }}</td>
                            <td>{{ $competition->reg_end }}</td>
                            <td>
                                @if (Carbon::now()->between(Carbon::parse($competition->reg_start), Carbon::parse($competition->reg_end)))
                                    <a class="btn btn-warning">Register</a>
                                @endif
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
            <div class="box-footer">
                <div class="row">
                    <div class="col-xs-12">
                        <a href="{{url('competitions/create')}}" class="btn btn-success">Add competition</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection