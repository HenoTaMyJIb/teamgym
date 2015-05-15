@extends('layouts.main')

@section('content')

    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">New Gymnast</h3>
                </div>
                <div class="box-body">
                    {!! Form::open(['url' => 'gymnasts/' . $club->slug]) !!}
                    @include('..people._form')
                    <div class="box-footer">
                        {!! Form::submit('Add', ['class' => 'btn btn-success']) !!}
                        <a href="{{ URL::previous() }}" class="btn btn-default">Back</a>
                    </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@stop