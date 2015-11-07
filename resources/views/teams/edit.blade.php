@extends('layouts.main')

@section('content')
<div class="row">
    <div class="col-xs-12">
        <div class="box box-success">
            <div class="box-header">
                <h3 class="box-title">Edit team</h3>
            </div>
            {!! Form::open(['method' => 'PATCH', 'action' => ['TeamsController@update', $team->id]]) !!}
            <div class="box-body">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <h4>{{ $team->competition->name }}</h4>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Club</label>
                            {!! Form::select('team[club_id]', $clubs, $team->club->id, ['class' => 'form-control']) !!}
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Team name</label>
                            {!! Form::text('team[name]', $team->name, ['class' => 'form-control']) !!}
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Age category</label>
                            {!! Form::select('team[age_group_id]', $ageGroups, $team->ageGroup->id, ['class' =>
                            'form-control']) !!}
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group" style="margin-top: 30px">
                            @foreach($genders as $gender)
                            <div class="col-lg-3 col-sm-4">
                                {!! Form::radio('team[gender_category]', $gender->code, ($gender->code ===
                                $team->gender->code)? true : false) !!}
                                <label>{{ $gender->name }}</label>
                            </div>
                            @endforeach
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6 col-md-12">
                <div class="box box-success">
                    <div class="box-header">
                        <h3 class="box-title">Gymnasts</h3> {{ $team->gymnasts()->count() }}
                    </div>
                    <div class="box-body">
                        <table class="table table-bordered table-hover">
                            <thead>
                            <tr>
                                <th>Nr</th>
                                <th>Name</th>
                                <th>Age</th>
                                <th>Gender</th>
                                <th>Hints</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($team->gymnasts as $i => $gymnast)
                            <tr>
                                <td>{{ $i+1 }}</td>
                                <td>
                                    <select class="gymnast-select" data-width="90%" name="gymnasts[]">
                                        <option value="{{ $gymnast->id}}" selected> {{$gymnast->person->getFullName()
                                            }}
                                        </option>
                                    </select>
                                </td>
                                <td class="age">{{ $gymnast->person->age }}</td>
                                <td class="gender">{{ $gymnast->person->gender }}</td>
                                <td class="status">
                                    @if(($gymnast->person->age > $team->ageGroup->max_age) || ($gymnast->person->age < $team->ageGroup->min_age))
                                    <i class="fa fa-warning text-danger" data-toggle="tooltip" data-placement="top" title="{{$ageWarning}}"></i>
                                    @endif
                                    @if($team->gender->code !== 'mix' && $gymnast->person->gender !== $team->gender->code)
                                    <i class="fa fa-warning text-danger" data-toggle="tooltip" data-placement="top" title="{{$genderWarning}}"></i>
                                    @endif
                                </td>
                            </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-12">
                <div class="box box-success">
                    <div class="box-header">
                        <h3 class="box-title">Coaches</h3>
                    </div>
                    <div class="box-body">
                        @for ($i = 1; $i <= 2; $i++)
                        <div class="form-group">
                            <label>Name</label>
                            <input type="text" class="form-control" name="coach[name][]" placeholder="Enter ...">
                        </div>
                        @endfor
                    </div>
                </div>
            </div>
        </div>
        <div class="box-footer">
            <button type="submit" class="btn btn-success">Save</button>
            <a href="{{ url('teams/' . $team->id) }}" class="btn btn-default">Tagasi</a>
        </div>
        {!! Form::close() !!}
    </div>
</div>
<script>
    $(document).ready(function () {
        $('.gymnast-select').each(function(){
            var gender = $('input[name="team[gender_category]"]').val();
            var ageGroupId = $('select[name="team[age_group_id]"]').val();
            checkGymnastStatus($(this).val(), ageGroupId, gender, $(this));
        });
        $('select[name="team[club_id]"]').on('change', function () {
            var clubId = $(this).val();
            $('select.gymnast-select').select2({
                ajax: {
                    url: "/api/gymnasts",
                    dataType: 'json',
                    data: function (params) {
                        return {
                            club: clubId,
                            q: params.term, // search term
                            page: params.page
                        };
                    },
                    processResults: function (data, page) {
                        return {
                            results: data
                        };
                    },
                    cache: true
                },
                placeholder: "Gymnast name",
                allowClear: true,
                escapeMarkup: function (markup) {
                    return markup;
                }, // let our custom formatter work
                templateResult: formatResult, // omitted for brevity, see the source of this page
                templateSelection: formatSelection // omitted for brevity, see the source of this page
            });
        });

        $('select.gymnast-select').select2({
            ajax: {
                url: "/api/gymnasts",
                dataType: 'json',
                data: function (params) {
                    return {
                        club: $('select[name="team[club_id]"]').val(),
                        q: params.term, // search term
                        page: params.page
                    };
                },
                processResults: function (data, page) {
                    return {
                        results: data
                    };
                },
                cache: true
            },
            placeholder: "Gymnast name",
            allowClear: true,
            escapeMarkup: function (markup) {
                return markup;
            }, // let our custom formatter work
            templateResult: formatResult, // omitted for brevity, see the source of this page
            templateSelection: formatSelection // omitted for brevity, see the source of this page
        });

        $('select.gymnast-select').on("select2:select", function (e) {
            var select = $(this);
            select.closest('tr').find('.age').html(e.params.data.person.age);
            select.closest('tr').find('.gender').html(e.params.data.person.gender);

            var ageGroupId = $('select[name="team[age_group_id]"]').val();
            var gender = $('input[name="team[gender_category]"]:checked').val();
            checkGymnastStatus(e.params.data.id, ageGroupId, gender, select)

        });

        $('input[name="team[gender_category]"]').on('ifChecked', function (e) {
            var gymnasts = $('.gymnast-select');
            var gender = e.currentTarget.defaultValue;
            var ageGroupId = $('select[name="team[age_group_id]"]').val();
            gymnasts.each(function () {
                var gymnastId = $(this).val();
                if (gymnastId) {
                    checkGymnastStatus(gymnastId, ageGroupId, gender, $(this));
                }
            });
        });

        $('select[name="team[age_group_id]"]').on('change', function (e) {
            var gymnasts = $('.gymnast-select');
            var gender = $('input[name="team[gender_category]"]:checked').val();
            var ageGroupId = $(this).val();
            gymnasts.each(function () {
                var gymnastId = $(this).val();
                if (gymnastId) {
                    checkGymnastStatus(gymnastId, ageGroupId, gender, $(this));
                }
            });
        });

    });

    function formatResult(gymnast) {
        var markup;
        if (gymnast.person) {
            var markup = '<div class="clearfix">' + gymnast.person.first_name + ' ' + gymnast.person.last_name + '</div>';
        }
        return markup;
    }
    function formatSelection(gymnast) {
        if (gymnast.text) return gymnast.text
        if (gymnast.person) {
            return gymnast.person.first_name + ' ' + gymnast.person.last_name;
        }
    }

    function checkGymnastStatus(gymnastId, ageGroupId, gender, gymnastSelect) {
        var statusText = gymnastSelect.closest('tr').find('.status');
        statusText.html('');
        $.ajax({
            url: "/api/check",
            dataType: 'json',
            data: { ageGroup: ageGroupId, gender: gender, gymnast: gymnastId}
        })
            .done(function (data) {
                if (data.status === 0) {
                    var message = data.message;
                    $.each(message, function (index, value) {
                        statusText.append('<i class="fa fa-warning text-danger" data-toggle="tooltip" data-placement="top" title="' + value + '"></i>');
                    });
                }
                else if (data.status === 1) {
                    statusText.html('<i class="fa fa-check text-success"></i>');
                }

                $('[data-toggle="tooltip"]').tooltip();

            });
    }
</script>
@endsection
