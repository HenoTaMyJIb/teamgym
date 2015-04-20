@extends('layouts.main')

@section('content')
<div class="row">
    <div class="col-xs-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">{{ $club->name }}</h3>
            </div>
            <div class="box-body">
                <div class="row">
                    <div class="col-xs-12">
                        <h3>Coaches</h3>
                        <table class="table table-bordered table-hover">
                            <thead>
                            <tr>
                                <td>Name</td>
                                <td>Category</td>
                                <td>Teams</td>
                            </tr>
                            </thead>
                            <tbody>
                                @foreach($club->coaches as $coach)
                                    <tr>
                                        <td>{{ $coach->person->getFullName() }}</td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>

                <div class="row">
                    <div class="col-xs-12">
                        <h3>Teams</h3>
                        <table class="table table-bordered table-hover">
                            <thead>
                            <tr>
                                <td>Name</td>
                                <td>Category</td>
                                <td>Coaches</td>
                            </tr>
                            </thead>
                            <tbody>

                            </tbody>
                        </table>
                    </div>
                </div>

                <div class="row">
                    <div class="col-xs-12">
                        <h3>Gymnasts</h3>
                        <table class="table table-bordered table-hover">
                            <thead>
                            <tr>
                                <td>Name</td>
                                <td>Coaches</td>
                                <td>Team</td>
                            </tr>
                            </thead>
                            <tbody>

                            </tbody>
                        </table>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection