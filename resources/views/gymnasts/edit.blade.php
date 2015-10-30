@extends('layouts.main')

@section('content')
<div class="row">
    <div class="col-md-10 col-md-offset-1">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Edit:{!!$gymnast->person->getFullName()!!}</h3>
            </div>
            <div class="box-body">
                {!! Form::model($gymnast,['method' => 'PATCH', 'action' => ['GymnastsController@update', $gymnast->id], 'class' => 'form-validate form-horizontal']) !!}
                @include('..people._form')
                <div class="box-footer">
                    <div class="row">
                        <div class="col-md-10">
                            {!! Form::submit('Update', ['class' => 'btn btn-success']) !!}
                            {!! Form::close() !!}
                            <a href="{{url('gymnasts')}}" class="btn btn-default">Back</a>
                        </div>
                        <div class="col-md-2">
                            {!! delete_form(['gymnasts.destroy', $gymnast->id]) !!}
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection