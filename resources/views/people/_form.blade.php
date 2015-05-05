<div class="box-body">
    {{--<h2>{{ $club->name}}</h2>--}}
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
            <div class="form-group">
                {!! Form::label('phone', 'Phone:') !!}
                {!! Form::text('person[phone]', null, ['class' => 'form-control']) !!}
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                {!! Form::label('email', 'Email:') !!}
                {!! Form::text('person[email]', null, ['class' => 'form-control']) !!}
            </div>
        </div>
        <div class="col-md-6">
            <!-- gender Form Input-->
            <div class="form-group">
                {!! Form::label('gender', 'Gender:') !!}
                {!! Form::radio('person[gender]', 'Male', ['class' => 'form-control']) !!}
                {!! Form::radio('person[gender]', 'Female', ['class' => 'form-control']) !!}
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <!-- country Form Input-->
            <div class="form-group">
                {!! Form::label('country', 'Country:') !!}
                {!! Form::text('person[country]', null, ['class' => 'form-control']) !!}
            </div>
        </div>
        <div class="col-md-6">
            <!-- birth_day Form Input-->
            <div class="form-group">
                {!! Form::label('birth_day', 'Birth Day:') !!}
                <div class="input-group">
                    <div class="input-group-addon">
                       <i class="fa fa-clock-o"></i>
                    </div>
                {!! Form::text('person[birth_day]', null, ['class' => 'form-control date-range']) !!}
                </div>
            </div>
        </div>
    </div>

</div>
<div class="box-footer">
    {!! Form::submit($submitButtonText, ['class' => 'btn btn-success']) !!}
    <a href="{{ URL::previous() }}" class="btn btn-default">Back</a>
</div>