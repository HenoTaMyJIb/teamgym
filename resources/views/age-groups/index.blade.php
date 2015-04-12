@extends('layouts.main')

@section('content')
<div class="row">
    <div class="col-xs-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Age groups</h3>
            </div>
            <div class="box-body">
                <table class="table table-bordered table-hover">
                    <thead>
                    <tr>
                        <td>Name</td>
                        <td>Rule</td>
                        <td>Gymnasts amount</td>
                        <td>Min year</td>
                        <td>Max year</td>
                        <td>Actions</td>
                    </tr>
                    </thead>
                    @foreach ($ageGroups as $ageGroup)
                    <tr>
                        <td>{{ $ageGroup->name }}</td>
                        <td>{{ $ageGroup->rule_type }}</td>
                        <td>{{ $ageGroup->gymnasts_amount }}</td>
                        <td>{{ $ageGroup->min_year }}</td>
                        <td>{{ $ageGroup->max_year }}</td>
                        <td>
                            <a href="{{ url('age-groups/' . $ageGroup->slug . '/edit') }}" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-edit"></i></a>
                        </td>
                    </tr>
                    @endforeach
                </table>
            </div>
            <div class="box-footer">
                <a href="{{url('age-groups/create')}}" class="btn btn-success">New age group</a>
            </div>
        </div>
    </div>
</div>
@endsection