@extends('layouts.main')

@section('content')
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="box box-success">
                <div class="box-header">
                    <h3 class="box-title">Edit:{!!$coach->person->getFullName()!!}</h3>
                </div>
                {!! Form::model($coach,['method' => 'PATCH', 'action' => ['CoachesController@update',
                $coach->id]]) !!}
                <div class="box-body">
                    @include('..people._form')
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                {!! Form::label('coach_category', 'Coach category:') !!}
                                {!! Form::text('coach[coach_category]', null, ['class' => 'form-control']) !!}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="box-footer">
                    <div class="row">
                        <div class="col-xs-2">
                            {!! Form::submit('Save', ['class' => 'btn btn-success']) !!}
                            {!! Form::close() !!}
                            <a href="{{ URL::previous() }}" class="btn btn-default">Back</a>
                        </div>
                        <div class="col-xs-10">
                            {!! delete_form(['coaches.destroy', $coach->id]) !!}
                        </div>
                    </div>
                </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
@stop