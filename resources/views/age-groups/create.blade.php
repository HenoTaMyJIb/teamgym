@extends('layouts.main')

@section('content')
<div class="row">
    <div class="col-xs-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">New age group</h3>
            </div>
            {!! Form::open(['url' => 'age-groups']) !!}
            <div class="box-body">
                    <div class="form-group">
                        {!! Form::label('name', 'Name:') !!}
                        {!! Form::text('name', null, ['class' => 'form-control']) !!}
                    </div>
                    <div class="row">
                        <div class="col-xs-6">
                            <div class="form-group">
                                {!! Form::label('min_year', 'Min year:') !!}
                                {!! Form::input('number', 'min_year', null, ['class' => 'form-control', 'min' => '1950', 'max' => '2015']) !!}
                            </div>
                        </div>
                        <div class="col-xs-6">
                            <div class="form-group">
                                {!! Form::label('max_year', 'Max year:') !!}
                                {!! Form::input('number', 'max_year', null, ['class' => 'form-control', 'min' => '1950', 'max' => '2015']) !!}
                            </div>
                        </div>
                    </div>
                <div class="row">
                    <div class="col-xs-6">
                        <div class="form-group">
                            {!! Form::label('rule_type', 'Code of Points:') !!}
                            {!! Form::select('rule_type', $rules, null, ['class' => 'form-control']) !!}
                        </div>
                    </div>
                    <div class="col-xs-6">
                        <div class="form-group">
                            {!! Form::label('gymnasts_amount', 'Gymnasts amount:') !!}
                            {!! Form::select('gymnasts_amount', $amount, null, ['class' => 'form-control']) !!}
                        </div>
                    </div>
                </div>

            </div>
            <div class="box-footer">
                {!! Form::submit('Add age group', ['class' => 'btn btn-success']) !!}
                <a href="{{ URL::previous() }}" class="btn btn-default">Back</a>
            </div>
            {!! Form::close() !!}
        </div>
    </div>
</div>
@stop