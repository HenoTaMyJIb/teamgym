@extends('layouts.main')

@section('content')
<div class="row">
    <div class="col-md-10 col-md-offset-1">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">New coach</h3>
            </div>
            {!! Form::open(['method' => 'PATCH', 'action' => ['CoachesController@update', $coach->id]]) !!}
            <div class="box-body">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            {!! Form::label('first_name', 'First name:') !!}
                            {!! Form::text('person[first_name]', $coach->person->first_name, ['class' => 'form-control']) !!}
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            {!! Form::label('last_name', 'Last name:') !!}
                            {!! Form::text('person[last_name]', $coach->person->last_name, ['class' => 'form-control']) !!}
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            {!! Form::label('code', 'Personal code:') !!}
                            {!! Form::text('person[code]', $coach->person->code, ['class' => 'form-control']) !!}
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            {!! Form::label('coach_category', 'Coach category:') !!}
                            {!! Form::text('coach[coach_category]', null, ['class' => 'form-control']) !!}
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            {!! Form::label('phone', 'Phone:') !!}
                            {!! Form::text('person[phone]', $coach->person->phone, ['class' => 'form-control']) !!}
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            {!! Form::label('email', 'Email:') !!}
                            {!! Form::text('person[email]', $coach->person->email, ['class' => 'form-control']) !!}
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
                        {!! delete_form(['coaches.destroy', $coach->id]) !!}
                    </div>
                </div>
            </div>
            {!! Form::close() !!}
        </div>
    </div>
</div>
@stop