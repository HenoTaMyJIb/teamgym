@extends('layouts.main')

@section('content')
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">New coach</h3>
                </div>
                <div class="box-body">
                    {!! Form::open(['url' => 'coaches/' . $club->slug]) !!}
                    @include('..people._form')
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                {!! Form::label('coach_category', 'Coach category:') !!}
                                {!! Form::text('coach[coach_category]', null, ['class' => 'form-control']) !!}
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
    </div>
@stop