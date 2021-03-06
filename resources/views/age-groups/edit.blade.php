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
                            {!! Form::label('min_year', 'Min age:') !!}
                            {!! Form::input('number', 'min_age', null, ['class' => 'form-control', 'min' => '0', 'max' => '100']) !!}
                        </div>
                    </div>
                    <div class="col-xs-6">
                        <div class="form-group">
                            {!! Form::label('max_year', 'Max age:') !!}
                            {!! Form::input('number', 'max_age', null, ['class' => 'form-control', 'min' => '0', 'max' => '100']) !!}
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-6">
                        <div class="form-group">
                            {!! Form::label('code_of_points', 'Code of Points:') !!}
                            {!! Form::select('code_of_points', $rules, null, ['class' => 'form-control']) !!}
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
                <div class="row">
                    <div class="col-xs-2">
                        {!! Form::submit('Save', ['class' => 'btn btn-success']) !!}
                        {!! Form::close() !!}
                        <a href="{{ URL::previous() }}" class="btn btn-default">Back</a>
                    </div>
                    <div class="col-xs-10">
                        {!! delete_form(['age-groups.destroy', $ageGroup->slug]) !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@stop