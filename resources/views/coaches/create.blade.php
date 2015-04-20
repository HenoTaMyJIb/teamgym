@extends('layouts.main')

@section('content')
<div class="row">
    <div class="col-md-10 col-md-offset-1">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">New coach</h3>
            </div>
            {!! Form::open(['url' => 'age-groups']) !!}
            <div class="box-body">
                <div class="form-group">
                    {!! Form::label('club_id', 'Club:') !!}
                    {!! Form::text('club_id', null, ['class' => 'form-control']) !!}
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            {!! Form::label('first_name', 'First name:') !!}
                            {!! Form::text('first_name', null, ['class' => 'form-control']) !!}
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            {!! Form::label('last_name', 'Last name:') !!}
                            {!! Form::text('last_name', null, ['class' => 'form-control']) !!}
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            {!! Form::label('code', 'Personal code:') !!}
                            {!! Form::text('code', null, ['class' => 'form-control']) !!}
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            {!! Form::label('coach_category', 'Coach category:') !!}
                            {!! Form::text('coach_category', null, ['class' => 'form-control']) !!}
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            {!! Form::label('phone', 'Phone:') !!}
                            {!! Form::text('phone', null, ['class' => 'form-control']) !!}
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            {!! Form::label('email', 'Email:') !!}
                            {!! Form::text('email', null, ['class' => 'form-control']) !!}
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    {!! Form::label('address', 'Address:') !!}
                    {!! Form::text('address', null, ['class' => 'form-control']) !!}
                </div>

            </div>
            <div class="box-footer">
                {!! Form::submit('Save', ['class' => 'btn btn-success']) !!}
                <a href="{{ URL::previous() }}" class="btn btn-default">Back</a>
            </div>
            {!! Form::close() !!}
        </div>
    </div>
</div>
@stop