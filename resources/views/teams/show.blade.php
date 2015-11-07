@extends('layouts.main')

@section('content')
<div class="row">
    <div class="col-xs-12">
        <div class="box box-success">
            <div class="box-header with-border">
                <h3 class="box-title">{{ $team->competition->name}}</h3>
            </div>
            <div class="box-body">
                <div class="row">
                    <div class="col-md-6">
                        <h4><strong>Team name: </strong>{{$team->name}} ({{ $team->club->name}})</h4>
                        <h4>{{ $team->ageGroup->name}}, {{$team->gender->name}}</h4>
                        <hr/>
                        @if($team->status === 'registered')
                            <p>You registration has been sent.</p>
                        @endif
                    </div>
                    <!--                    <div class="col-md-6">-->
                    <!--                        <h4><b>Tariff forms</b></h4>-->
                    <!--                        @if($tumblingTF)-->
                    <!--                            <a href="{{ url('tariff-forms/ . $tumblingTF->id')}}" class="btn btn-primary">Tumbling</a>-->
                    <!--                        @else-->
                    <!--                            <a href="{{ url('tariff-forms/create/tumbling/' . $team->id)}}" class="btn btn-primary">Add tumbling</a>-->
                    <!--                        @endif-->
                    <!--                        @if($trampetteTF)-->
                    <!--                            <a href="{{ url('tariff-forms/' . $trampetteTF->id)}}" class="btn btn-primary">Trampette</a>-->
                    <!--                        @else-->
                    <!--                            <a href="{{ url('tariff-forms/create/trampette/' . $team->id)}}" class="btn btn-primary">Add trampette</a>-->
                    <!--                        @endif-->
                    <!--                    </div>-->
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <table class="table table-bordered">
                            @if($team->status === 'draft')
                            <tr>
                                <td class="text-danger"><strong>Pre registration ends at {{$team->competition->pre_reg_end }}</strong></td>
                                <td><a href="{{url('teams/' . $team->id . '/status/pre-registered')}}">Send pre registration</a></td>
                            </tr>
                            @elseif($team->status === 'pre-registered')
                            <tr>
                                <td class="text-danger"><strong>Registration ends at {{$team->competition->reg_end }}</strong></td>
                                <td><a href="{{url('teams/' . $team->id . '/status/registered')}}">Confirm registartion</a></td>
                            </tr>
                            @endif

                        </table>
                    </div>
                    <div class="col-md-6 text-right">
                        <a href="{{url('teams/' . $team->id . '/edit')}}" class="btn btn-success">Edit</a>
                        <a href="{{url('competitions/'.$team->competition->id)}}" class="btn btn-default">Back</a>
                        <a href="#" class="btn btn-default">Delete</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6 col-md-12">
                <div class="box box-success">
                    <div class="box-header with-border">
                        <h3 class="box-title">Gymnasts</h3>
                    </div>
                    <div class="box-body">
                        <table class="table table-bordered table-hover">
                            <thead>
                            <tr>
                                <th>Nr</th>
                                <th>Name</th>
                                <th>Age</th>
                                <th>Gender</th>
                                <th>Hints</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($team->gymnasts as $i => $gymnast)
                            <tr>
                                <td>{{ $i+1 }}</td>
                                <td>{{ $gymnast->person->getFullName() }}</td>
                                <td>{{ $gymnast->person->age }}</td>
                                <td>{{ $gymnast->person->gender }}</td>
                                <td>
                                    @if(($gymnast->person->age > $team->ageGroup->max_age) || ($gymnast->person->age < $team->ageGroup->min_age))
                                    <i class="fa fa-warning text-danger" data-toggle="tooltip" data-placement="top" title="{{$ageWarning}}"></i>
                                    @endif
                                    @if($team->gender->code !== 'mix' && $gymnast->person->gender !== $team->gender->code)
                                    <i class="fa fa-warning text-danger" data-toggle="tooltip" data-placement="top" title="{{$genderWarning}}"></i>
                                    @endif
                                    <i class="fa fa-check text-success"></i>
                                </td>
                            </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-12">
                <div class="box box-success">
                    <div class="box-header with-border">
                        <h3 class="box-title">Coaches</h3>
                    </div>
                    <div class="box-body">
                        @for ($i = 1; $i <= 2; $i++)
                        <div class="form-group">
                            <label>Name</label>
                            <input type="text" class="form-control" name="coach[name][]" placeholder="Enter ...">
                        </div>
                        @endfor
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
