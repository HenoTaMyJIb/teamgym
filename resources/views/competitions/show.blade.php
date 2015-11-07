@extends('layouts.main')

@section('content')
<div class="row">
    <div class="col-xs-12">
        <div class="box box-success">
            <div class="box-body">
                <h3>{{ $competition->name }}</h3>
                <h4>Date: {{ $competition->start_date }}</h4>
                <h4>Registration open: {{ $competition->reg_start }} - {{ $competition->reg_end }}, {{Carbon::parse($competition->reg_end)->diffForHumans() }}</h4>
                <h4>Address: {{ $competition->address }}</h4>
                @if($isRegister)
                <a href="{{url('competitions/'.$competition->id.'/teams/create')}}" class="btn btn-success" style="margin-top: 20px">Register</a>
                @endif
            </div>
        </div>

        <div class="row">
            <div class="col-xs-12">
                <div class="box box-solid">
                    <div class="box-header with-border">
                        <h3 class="box-title">Teams</h3>
                    </div>
                    <div class="box-body">
                        <table class="table table-bordered table-hover data-table">
                            <thead>
                            <tr>
                                <th>Name</th>
                                <th>Club</th>
                                <th>Age group</th>
                                <th>Gender</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($teams as $team)
                            <tr>
                                <td>
                                    @if($team->isAllowedToWatch())
                                    <a href="{{ url('teams/' . $team->id) }}">{{ $team->name }}</a>
                                    @else
                                    {{ $team->name }}
                                    @endif
                                </td>
                                <td>
                                    {{ $team->club->name }}
                                </td>
                                <td>
                                    {{ $team->ageGroup->name }}
                                </td>
                                <td>{{ $team->gender->name }}</td>
                            </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="box-footer">

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection