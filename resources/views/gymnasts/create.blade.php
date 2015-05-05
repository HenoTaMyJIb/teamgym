@extends('layouts.main')

@section('content')
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">New Gymnast</h3>
                </div>
                {!! Form::open(['url' => 'gymnasts/' . $club->slug]) !!}
                @include('..people._form',['submitButtonText'=>'Add Gymnast'])

                {!! Form::close() !!}
            </div>
        </div>
    </div>
@stop