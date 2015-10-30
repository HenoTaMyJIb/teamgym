@extends('layouts.main')

@section('content')

    <div class="row">
        <div class=" col-md-offset-2 col-md-8">
            <div class="box box-success">
                <div class="box-header">
                    <h3 class="box-title">New Gymnast</h3>
                </div>
                <div class="box-body">
                    {!! Form::open(['url' => 'gymnasts', 'class' => 'form-validate form-horizontal']) !!}
                    @include('..people._form')
                    <div class="box-footer">
                        {!! Form::submit('Add', ['class' => 'btn btn-success']) !!}
                        <a href="{{url('gymnasts')}}" class="btn btn-default">Back</a>
                    </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@stop