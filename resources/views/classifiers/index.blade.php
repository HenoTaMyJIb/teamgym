@extends('layouts.main')

@section('content')
<div class="row">
    <div class="col-xs-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Classifiers</h3>
            </div>
            <div class="box-body">
                <table class="table table-bordered table-hover">
                    <thead>
                    <tr>
                        <td>Name</td>
                        <td>Code</td>
                        <td>Description</td>
                    </tr>
                    </thead>
                    @foreach ($classifiers as $classifier)
                    <tr>
                        <td>{{ $classifier->name }}</td>
                        <td>{{ $classifier->code }}</td>
                        <td>{{ $classifier->notes }}</td>
                    </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
</div>
@endsection