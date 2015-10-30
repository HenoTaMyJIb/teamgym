@extends('layouts.main')

@section('content')
<div class="row">
    <div class="col-xs-12">
        <div class="box box-success">
            <div class="box-header with-border">
                <h3 class="box-title">Add team</h3>
            </div>
            {!! Form::open(['url' => 'competitions/'.$competition->id.'/teams']) !!}
            <div class="box-body">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Competition</label>
                            {{ $competition->name }}
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Club</label>
                            {!! Form::select('team[club_id]', $allowedClubs, null, ['class' => 'form-control']) !!}
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Team name</label>
                            {!! Form::text('team[name]', null, ['class' => 'form-control']) !!}
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Age category</label>
                            {!! Form::select('team[age_group_id]', $ageGroups, null, ['class' => 'form-control']) !!}
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group" style="margin-top: 30px">
                            @foreach($genders as $i => $gender)
                            <div class="col-lg-3 col-sm-4">
                                @if($i === 0)
                                {!! Form::radio('team[gender_category]', $gender->code, true) !!}
                                @else
                                {!! Form::radio('team[gender_category]', $gender->code) !!}
                                @endif
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
                    <div class="box-header with-border">
                        <h3 class="box-title">Gymnasts</h3>
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
                        @for ($i = 1; $i <= 12; $i++)
                        <tr>
                            <td>{{ $i }}</td>
                            <td><select class="gymnast-select" data-width="90%" name="gymnasts[]"></td>
                            <td class="age"></td>
                            <td class="gender"></td>
                            <td class="status"> </td>
                        </tr>
                        @endfor
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-12">
                <div class="box box-success">
                    <div class="box-header with-border">
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
            <button type="submit" class="btn btn-success">Create</button>
            <a href="{{url('competitions')}}"class="btn btn-default">Back</a>
        </div>
        {!! Form::close() !!}
    </div>
</div>
<script>
    $(document).ready(function () {
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
                console.log(data.message);
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

