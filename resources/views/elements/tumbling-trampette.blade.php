@extends('layouts.main')

@section('content')
<div class="row">
    <div class="col-xs-12">
        <div class="box box-success">
            <div class="box-header with-border">
                <h3 class="box-title">{{ $title}} <i class="fa fa-angle-double-right"></i> {{ $ageGroup->name }}</h3>
            </div>
            <div class="box-body">
                <div class="row">
                    <div class="col-xs-12">
                        <table class="table table-bordered table-hover" id="elementsTable">
                            <thead>
                            <tr>
                                <th>Type</th>
                                <th>Code</th>
                                <th>Name</th>
                                <th>Symbol</th>
                                <th>Value</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach ($elements as $element)
                            <tr>
                                <td>{{ $element->elementType->name }}</td>
                                <td>{{ $element->elementValues()->where('code_of_points', '=', $ageGroup->code_of_points)->first()->code }}</td>
                                <td>{{ $element->name }}</td>
                                <td>No symbol</td>
<!--                                @if($element->symbol)-->
<!--                                <td><img src="{{ url($element->symbol) }}"/></td>-->
<!--                                @else-->
<!--                                @endif-->
                                <td>{{ $element->elementValues()->where('code_of_points', '=', $ageGroup->code_of_points)->first()->value }}</td>
                            </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection