@extends('layouts.main')

@section('content')
<div class="row">
    <div class="col-xs-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Edit age group {!! $ageGroup->name !!}</h3>
            </div>
            {!! Form::model($ageGroup, ['method' => 'PATCH', 'action' => ['AgeGroupsController@update', $ageGroup->slug]]) !!}
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
                            {!! Form::label('rule_type', 'Rule type:') !!}
                            {!! Form::select('rule_type', ['mini' => 'Mini EEVL', 'youth' => 'Youth EEVL', 'ueg' => 'UEG'], null, ['class' => 'form-control']) !!}
                        </div>
                    </div>
                    <div class="col-xs-6">
                        <div class="form-group">
                            {!! Form::label('gymnasts_amount', 'Gymnasts amount:') !!}
                            {!! Form::select('gymnasts_amount', ['full' => 'Full', 'trio' => 'Trio'], null, ['class' => 'form-control']) !!}
                        </div>
                    </div>
                </div>

            </div>
            <div class="box-footer">
                <div class="row">
                    <div class="col-xs-12">
                        {!! Form::submit('Save', ['class' => 'btn btn-success pull-right']) !!}
                        {!! Form::close() !!}
                        {!! delete_form(['age-groups.destroy', $ageGroup->slug]) !!}
                    </div>

                </div>

            </div>


        </div>
    </div>
</div>
@stop