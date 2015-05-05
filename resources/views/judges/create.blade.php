@extends('layouts.main')

@section('content')
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">New Judge</h3>
                </div>
                {!! Form::open(['url' => 'judges/' . $club->slug]) !!}
                <div class="box-body">
                    <h2>{{ $club->name}}</h2>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                {!! Form::label('first_name', 'First name:') !!}
                                {!! Form::text('person[first_name]', null, ['class' => 'form-control']) !!}
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                {!! Form::label('last_name', 'Last name:') !!}
                                {!! Form::text('person[last_name]', null, ['class' => 'form-control']) !!}
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                {!! Form::label('code', 'Personal code:') !!}
                                {!! Form::text('person[code]', null, ['class' => 'form-control']) !!}
                            </div>
                        </div>
                        <div class="col-md-6">
                            <!-- Judge Category Form Input-->
                            <div class="form-group">
                                {!! Form::label('judge_category', 'Judge Category:') !!}
                                {!! Form::text('judge[judge_category]', null, ['class' => 'form-control']) !!}
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                {!! Form::label('phone', 'Phone:') !!}
                                {!! Form::text('person[phone]', null, ['class' => 'form-control']) !!}
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                {!! Form::label('email', 'Email:') !!}
                                {!! Form::text('person[email]', null, ['class' => 'form-control']) !!}
                            </div>
                        </div>
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