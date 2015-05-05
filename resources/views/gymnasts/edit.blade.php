@extends('layouts.main')

@section('content')
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">Edit:{!!$gymnast->person->getFullName()!!}</h3>
                </div>
                {!! Form::model($gymnast,['method' => 'PATCH', 'action' => ['GymnastsController@update', $gymnast->id]]) !!}
                @include('..people._form',['submitButtonText'=>'Update Gymnast'])
                {!! Form::close() !!}
            </div>
        </div>
    </div>
@stop