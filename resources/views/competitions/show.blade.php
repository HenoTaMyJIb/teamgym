@extends('layouts.main')

@section('content')
<div class="row">
    <div class="col-xs-12">
        <div class="box box-success">
            <div class="box-header">
                <h3 class="box-title">{{ $competition->name }}</h3>
            </div>
            <div class="box-body">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="box box-solid">
                            <div class="box-header">
                                <h3 class="box-title">Teams</h3>
                            </div>
                            <div class="box-body">
                                <table class="table table-bordered table-hover data-table">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($teams as $team)
                                        <tr>
                                            <td><a href="{{ url('coaches/' . $coach->id .'/edit') }}">{{ $team->name }}</a></td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <div class="box-footer">
                                <a href="{{url('coaches/create')}}" class="btn btn-success">Register team</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection