@extends('layouts.main')

@section('content')
<div class="row">
    <div class="col-xs-12">
        <div class="box box-success">
            <div class="box-header with-border">
                <h3 class="box-title">Create tariff form</h3>
            </div>
            <div class="box-body">
                <div class="row">
                    <div class="col-sm-4">
                        <h3>{{ $discipline->name }}</h3>
                        <h4>{{ $team->competition->name }}</h4>
                        <h4><b>{{ $team->club->name }} {{ $team->name }}</b></h4>
                        <h4> {{ $team->ageGroup->name }}, {{ $team->gender->name }}</h4>
                    </div>
                </div>
            </div>
            <div class="box-footer">
            </div>
        </div>
    </div>
</div>

{!! Form::open(['url' => 'tariff-forms', 'class' => 'form-form-horizontal']) !!}
{!! Form::hidden('team_id', $team->id) !!}
{!! Form::hidden('discipline', $discipline->code) !!}
{!! Form::hidden('gymnastsAmount', $team->ageGroup->gymnastsAmount->min, ['class' => 'gymnasts-amount']) !!}
<div class="row">
    <div class="col-xs-12">
        <div class="box box-success">
            <div class="box-header with-border">
                <h3 class="box-title">1. round</h3>
            </div>
            <div class="box-body">
                <div class="row round">
                    <div class="series">
                        <div class="col-md-11">
                            <div class="form-group">
                                <label class="col-md-1 control-label">Gymnasts 1 - 6:</label>

                                <div class="col-md-2 element">
                                    {!! Form::select('round[1][1][elements][]', [], null, ['class' => 'form-control element-select select-'.$discipline->code . ' first', 'data-ajax--url' =>
                                    url('api/elements?cop=ueg&discipline='.$discipline->code)]) !!}
                                    {!! Form::hidden('value', null, ['class' => 'element-value'])!!}
                                </div>
                                @if($discipline->code === 'tumbling')
                                <div class="col-md-2 element hide" style="display: none">
                                    {!! Form::select('round[1][1][elements][]', [], null, ['class' => 'form-control element-select select-'.$discipline->code . ' first', 'data-ajax--url' =>
                                    url('api/elements?cop=ueg&discipline='.$discipline->code)]) !!}
                                    {!! Form::hidden('value', null, ['class' => 'element-value'])!!}
                                </div>
                                <div class="col-md-2 element hide" style="display: none">
                                    {!! Form::select('round[1][1][elements][]', [], null, ['class' => 'form-control element-select select-'.$discipline->code . ' first', 'data-ajax--url' =>
                                    url('api/elements?cop=ueg&discipline='.$discipline->code)]) !!}
                                    {!! Form::hidden('value', null, ['class' => 'element-value'])!!}
                                </div>
                                <div class="col-md-2 element hide" style="display: none">
                                    {!! Form::select('round[1][1][elements][]', [], null, ['class' => 'form-control element-select select-'.$discipline->code . ' first', 'data-ajax--url' =>
                                    url('api/elements?cop=ueg&discipline='.$discipline->code)]) !!}
                                    {!! Form::hidden('value', null, ['class' => 'element-value'])!!}
                                </div>
                                <div class="col-md-2 element hide" style="display: none">
                                    {!! Form::select('round[1][1][elements][]', [], null, ['class' => 'form-control element-select select-'.$discipline->code . ' first', 'data-ajax--url' =>
                                    url('api/elements?cop=ueg&discipline='.$discipline->code)]) !!}
                                    {!! Form::hidden('value', null, ['class' => 'element-value'])!!}
                                </div>

                                <a href="#" class="add-element"><i class="fa fa-plus"></i></a>
                                @endif
                            </div>
                        </div>
                        <div class="col-md-1">
                            <p class="series-value"></p>
                        </div>
                    </div>
                    <div class="col-md-1">
                        <p class="round-value"></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@for($roundI = 2; $roundI<=3; $roundI++)
<div class="row">
    <div class="col-lg-12">
        <div class="box box-success">
            <div class="box-header with-border">
                <h3 class="box-title">{{ $roundI }}. round</h3>
            </div>
            <div class="box-body">
                <div class="row round">
                    <div class="col-md-12">
                        @for ($i = $team->ageGroup->gymnastsAmount->min; $i > 0; $i--)
                        <div class="row series">
                            <div class="col-md-11">
                                <div class="form-group">
                                    <label class="col-md-1 control-label" style="margin-top: 15px;">Gymnast {{($i - $team->ageGroup->gymnastsAmount->min - 1) * -1}}:</label>

                                    <div class="col-md-1 element">
                                        {!! Form::select('round['.$roundI.']['.(($i - $team->ageGroup->gymnastsAmount->min - 1) * -1).'][elements][]', [], null, ['class' => 'form-control element-select select-' .$discipline->code, 'data-ajax--url' =>
                                        url('api/elements?cop=ueg&discipline='.$discipline->code)]) !!}
                                        {!! Form::hidden('value', null, ['class' => 'element-value'])!!}
                                    </div>
                                    @if($discipline->code === 'tumbling')
                                    <div class="col-md-1 element hide" style="display: none">
                                        {!! Form::select('round['.$roundI.']['.(($i - $team->ageGroup->gymnastsAmount->min - 1) * -1).'][elements][]', [], null, ['class' => 'form-control element-select select-' .$discipline->code, 'data-ajax--url' =>
                                        url('api/elements?cop=ueg&discipline='.$discipline->code)]) !!}
                                        {!! Form::hidden('value', null, ['class' => 'element-value'])!!}
                                    </div>
                                    <div class="col-md-1 element hide" style="display: none">
                                        {!! Form::select('round['.$roundI.']['.(($i - $team->ageGroup->gymnastsAmount->min - 1) * -1).'][elements][]', [], null, ['class' => 'form-control element-select select-' .$discipline->code, 'data-ajax--url' =>
                                        url('api/elements?cop=ueg&discipline='.$discipline->code)]) !!}
                                        {!! Form::hidden('value', null, ['class' => 'element-value'])!!}
                                    </div>
                                    <div class="col-md-1 element hide" style="display: none">
                                        {!! Form::select('round['.$roundI.']['.(($i - $team->ageGroup->gymnastsAmount->min - 1) * -1).'][elements][]', [], null, ['class' => 'form-control element-select select-' .$discipline->code, 'data-ajax--url' =>
                                        url('api/elements?cop=ueg&discipline='.$discipline->code)]) !!}
                                        {!! Form::hidden('value', null, ['class' => 'element-value'])!!}
                                    </div>
                                    <div class="col-md-1 element hide" style="display: none">
                                        {!! Form::select('round['.$roundI.']['.(($i - $team->ageGroup->gymnastsAmount->min - 1) * -1).'][elements][]', [], null, ['class' => 'form-control element-select select-' .$discipline->code, 'data-ajax--url' =>
                                        url('api/elements?cop=ueg&discipline='.$discipline->code)]) !!}
                                        {!! Form::hidden('value', null, ['class' => 'element-value'])!!}
                                    </div>
                                    <a href="#" class="add-element"><i class="fa fa-plus"></i></a>
                                    @endif
                                </div>
                            </div>
                            <div class="col-md-1">
                                <p class="series-value"></p>
                            </div>
                        </div>
                        @endfor
                        <div class="col-md-1 pull-right">
                            <p class="round-value"></p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endfor

<div class="row">
    <div class="col-xs-12">
        <div class="box">
            <div class="box-body">
                <button type="submit" class="btn btn-success">Create</button>
            </div>
        </div>
    </div>
</div>
{!! Form::close() !!}

@endsection