@extends('layouts.main')

@section('content')
<div class="row">
    <div class="col-xs-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">{{ $competition->name }}</h3>
            </div>
            {!! Form::model($competition, ['method' => 'PATCH', 'action' => ['CompetitionsController@update', $competition->id]]) !!}
            <div class="box-body">

                <div class="form-group">
                    {!! Form::label('name', 'Title:') !!}
                    {!! Form::text('name', null, ['class' => 'form-control']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('address', 'Address:') !!}
                    {!! Form::text('address', null, ['class' => 'form-control']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('competition_date', 'Date:') !!}
                    <div class="input-group">
                        <div class="input-group-addon">
                            <i class="fa fa-clock-o"></i>
                        </div>
                        {!! Form::text('start_date', null, ['class' => 'form-control datepicker-single']) !!}
                    </div>
                </div>
                <div class="form-group">
                    {!! Form::label('registration_date', 'Registration date:') !!}
                    <div class="input-group input-daterange">
                        {!! Form::text('reg_start', null, ['class' => 'form-control']) !!}
                        <span class="input-group-addon">-</span>
                        {!! Form::text('reg_end', null, ['class' => 'form-control']) !!}
                    </div>
                </div>
                <div class="form-group">
                    {!! Form::label('pre_reg_end', 'Pre registration last date:') !!}
                    <div class="input-group">
                        <div class="input-group-addon">
                            <i class="fa fa-clock-o"></i>
                        </div>
                        {!! Form::text('pre_reg_end', null, ['class' => 'form-control datepicker-single']) !!}
                    </div>
                </div>

            </div>
            <div class="box-footer">
                <button type="submit" class="btn btn-success">Create</button>
                <a href="{{ URL::previous() }}" class="btn btn-default">Back</a>
            </div>
            {!! Form::close() !!}
        </div>
    </div>
</div>

@endsection