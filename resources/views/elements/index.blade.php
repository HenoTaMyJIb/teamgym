@extends('layouts.main')

@section('content')
<div class="row">
    <div class="col-xs-12">
        <div class="box box-success">
            <div class="box-header with-border">
                <h3 class="box-title">Elements</h3>
            </div>
            <div class="box-body">
                <div class="row">
                    <div class="col-xs-12">
                        <table class="table table-bordered table-hover data-table">
                            <thead>
                            <tr>
                                <th>Name</th>
                                <th>Discipline</th>
                                <th>Symbol</th>
                                @foreach($rules as $rule)
                                <th>{{ $rule->name }}</th>
                                @endforeach
                            </tr>
                            </thead>
                            <tbody>
                            @foreach ($elements as $element)
                            <tr>
                                <td>{{ $element->name }}</td>
                                <td>{{ $element->elementType->discipline->name }} ({{ $element->elementType->name }})</td>
                                <td>No symbol</td>
                                @foreach($rules as $rule)
                                <td>
                                    @if($element->elementValues()->where('code_of_points', $rule->code)->first())
                                    {{ $element->elementValues()->where('code_of_points', $rule->code)->first()->value }}
                                    @endif
                                </td>
                                @endforeach
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