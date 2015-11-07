@extends('layouts.main')

@section('content')

<div class="row">
    <div class="col-xs-12">
        <div class="box box-success">
            <div class="box-body">
                <h4>
                    <strong>Teams total {{ $competition->teams()->count() }}</strong>
                </h4>
                @foreach($ageGroups as $i => $ageGroup)
                @if($i % 6 === 0)
                <div class="row">
                    @endif
                    <div class="col-md-2">
                        <h4>{{ $ageGroup->name }}</h4>

                        <p>Teams count: {{ $competition->teams()->where('age_group_id', $ageGroup->id)->count() }}</p>
                        <table class="table table-bordered table-hover">
                            @foreach($competition->teams()->where('age_group_id', $ageGroup->id)->get() as $team)
                            <tr>
                                <td>{{$team->club->name}} {{ $team->name}}</td>
                            </tr>
                            @endforeach
                        </table>
                    </div>
                    @if($i > 0 && ($i + 1) % 6 === 0)
                </div>
                @endif
                @endforeach

            </div>
        </div>
    </div>
</div>

@endsection