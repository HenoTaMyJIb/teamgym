@extends('layouts.main')

@section('content')
<div class="row">
    <div class="col-xs-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">New competition</h3>
            </div>
            {!! Form::open(['url' => 'competitions']) !!}
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
                        {!! Form::text('competition_date', null, ['class' => 'form-control datetime-range']) !!}
                    </div>
                </div>
                <div class="form-group">
                    {!! Form::label('registration_date', 'Registration date:') !!}
                    <div class="input-group">
                        <div class="input-group-addon">
                            <i class="fa fa-clock-o"></i>
                        </div>
                        {!! Form::text('registration_date', null, ['class' => 'form-control date-range']) !!}
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