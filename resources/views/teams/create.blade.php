@extends('layouts.main')

@section('content')
    <div class="row">
        <div class="col-xs-12">
            <div class="box box-success">
                <div class="box-header">
                    <h3 class="box-title">Add team</h3>
                </div>
                <div class="box-body">
                    {!! Form::open(['url' => 'teams']) !!}
                    <h4><b>Club:</b> Here is current club name</h4>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                {!! Form::label('competition_id', 'Competitions:') !!}
                                {!! Form::select('competition_id', ['1' => 'Test'], null, ['class' => 'form-control']) !!}
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                {!! Form::label('first_name', 'First name:') !!}
                                {!! Form::text('person[first_name]', null, ['class' => 'form-control']) !!}
                            </div>
                        </div>
                    </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
@endsection