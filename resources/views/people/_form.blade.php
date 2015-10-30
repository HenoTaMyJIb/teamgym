<div class="form-group">
    {!! Form::label('club', 'Club:', ['class' => 'col-sm-2 control-label']) !!}
    <div class="col-sm-8">
        {!! Form::select('club', $clubs, null, ['class' => 'form-control']) !!}
    </div>
</div>
<div class="form-group">
    {!! Form::label('first_name', 'First name:', ['class' => 'col-sm-2 control-label']) !!}
    <div class="col-sm-8">
        {!! Form::text('person[first_name]', null, ['class' => 'form-control']) !!}
    </div>
</div>
<div class="form-group">
    {!! Form::label('first_name', 'Last name:', ['class' => 'col-sm-2 control-label']) !!}
    <div class="col-sm-8">
        {!! Form::text('person[last_name]', null, ['class' => 'form-control', 'required' => 'true']) !!}
    </div>
</div>
<div class="form-group">
    {!! Form::label('country', 'Country:', ['class' => 'col-sm-2 control-label']) !!}
    <div class="col-sm-8">
        {!! Form::select('person[country]', $countries, null, ['class' => 'form-control']) !!}
    </div>
</div>
<div class="form-group">
    {!! Form::label('person[code]', 'Personal code:', ['class' => 'col-sm-2 control-label']) !!}
    <div class="col-sm-8">
        {!! Form::text('person[code]', null, ['class' => 'form-control', 'required' => 'true', 'minlength' => '11', 'maxlength' => '11', 'digits' => 'true']) !!}
    </div>
</div>
<div class="form-group" style="display: none;">
    {!! Form::label('person[birth_day]', 'Date of birth:', ['class' => 'col-sm-2 control-label']) !!}
    <div class="col-sm-8">
        {!! Form::text('person[birth_day]', null, ['class' => 'form-control date-single', 'required' => 'true']) !!}
    </div>
</div>
<div class="form-group" style="display: none;">
    {!! Form::label('gender', 'Gender:', ['class' => 'col-sm-2 control-label']) !!}
    <div class="col-sm-8" style="margin-top: 6px">
        {!!Form::label('gender', 'Male') !!}
        {!! Form::radio('person[gender]', 'Male', ['class' => 'radio']) !!}
        {!!Form::label('gender', 'Female') !!}
        {!! Form::radio('person[gender]', 'Female', ['class' => 'radio']) !!}
    </div>
</div>
<div class="form-group">
    {!! Form::label('person[email]', 'Email:', ['class' => 'col-sm-2 control-label']) !!}
    <div class="col-sm-8">
        {!! Form::text('person[email]', null, ['class' => 'form-control']) !!}
    </div>
</div>
<div class="form-group">
    {!! Form::label('person[phone]', 'Phone:', ['class' => 'col-sm-2 control-label']) !!}
    <div class="col-sm-8">
        {!! Form::text('person[phone]', null, ['class' => 'form-control']) !!}
    </div>
</div>
<script>
    $(document).on('change', 'select[name="person[country]"]', function () {
        if ($(this).val() === 'EE') {
            $('input[name="person[code]"]').parents('.form-group').show();
            $('input[name="person[birth_day]"').parents('.form-group').hide();
            $('input[name="person[gender]"').parents('.form-group').hide();
        }
        else {
            $('input[name="person[code]"]').parents('.form-group').hide();
            $('input[name="person[birth_day]"').parents('.form-group').show();
            $('input[name="person[gender]"').parents('.form-group').show();
        }
    });

    if ($('select[name="person[country]"]').val() === 'EE') {
        $('input[name="person[code]"]').parents('.form-group').show();
        $('input[name="person[birth_day]"').parents('.form-group').hide();
        $('input[name="person[gender]"').parents('.form-group').hide();
        $('input[name="person[birth_day]"').val(null);
    }
    else {
        $('input[name="person[code]"]').parents('.form-group').hide();
        $('input[name="person[birth_day]"').parents('.form-group').show();
        $('input[name="person[gender]"').parents('.form-group').show();
    }
</script>

