@extends('layouts.main')

@section('content')
<div class="row round">
    <div class="col-xs-12">
        <div class="box box-success">
            <div class="box-header with-border">
                <h3 class="box-title">Tariff Form: {{$tariffForm->disciplineCode->name}} - {{ $tariffForm->team->name }}</h3>
            </div>
            <div class="box-body">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2 text-center">
                        <p> TeamGym Tariff Form - {{ $tariffForm->disciplineCode->name }} </p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-3 col-lg-offset-2">
                        @foreach($genders as $gender)
                        <div class="col-lg-4">
                            <input type="checkbox" name="{{$gender->code}}" id="{{$gender->code}}" disabled {{$gender->code === $tariffForm->team->gender->code ? "checked" : ""}} />
                            <label>{{ $gender->name }}</label>
                        </div>
                        @endforeach
                    </div>
                    <div class="col-lg-2 text-center">
                        {{ $tariffForm->team->ageGroup->name }}
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <h3> Team: {{ $tariffForm->team->name }} </h3>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">

                        <!-- Round 1: start -->
                        <table border="2" width="100%">
                            <tr>
                                <td style="border: none;">
                                    All Gymnasts:
                                    @foreach($tariffForm->rounds()->whereOrder(1)->first()->series()->whereOrder(1)->first()->elements as $element)
                                    <img src="{{url($element->symbol)}}">
                                    @endforeach
                                </td>
                                <td style="border: none;" colspan="3" class="text-right">Value:</td>
                            </tr>
                            <tr>
                                <td colspan="4" style="border: none;" class="text-right">Difficulty value round 1:</td>
                            </tr>
                            <tr>
                                <td class="text-center">Execution deductions (E-panel)</td>
                                <td class="text-center" colspan="3">Composition deductions (C-panel)</td>
                            </tr>
                            <tr>
                                <td rowspan="8"></td>
                                <td>Last elem. landing</td>
                                <td>0.1/each</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>Team round</td>
                                <td>0.2/gymn.</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td colspan="3" class="text-center">Composition (C-panel) - notes</td>
                            </tr>
                            <tr>
                                <td>Return back</td>
                                <td colspan="2"></td>
                            </tr>
                            <tr>
                                <td>Jogging together</td>
                                <td colspan="2"></td>
                            </tr>
                            <tr>
                                <td>Add. movements</td>
                                <td colspan="2"></td>
                            </tr>
                            <tr>
                                <td>Rotation direction</td>
                                <td colspan="2"></td>
                            </tr>
                            <tr>
                                <td>Twists</td>
                                <td colspan="2"></td>
                            </tr>
                        </table>
                        <!-- Round 1: end -->

                        <!-- Round 2: start -->
                        <table border="2" width="100%">
                            @foreach($tariffForm->rounds()->whereOrder(2)->first()->series as $series)
                            <tr>
                                <td style="border: none;">
                                    Gymnasts:
                                    @foreach($series->elements as $element)
                                    <img src="{{url($element->symbol)}}">
                                    @endforeach
                                </td>
                                <td style="border: none;" colspan="3" class="text-right">Value:</td>
                                @endforeach
                            </tr>
                            <tr>
                                <td colspan="4" style="border: none;" class="text-right">Difficulty value round 1:</td>
                            </tr>
                            <tr>
                                <td class="text-center">Execution deductions (E-panel)</td>
                                <td class="text-center" colspan="3">Composition deductions (C-panel)</td>
                            </tr>
                            <tr>
                                <td rowspan="8"></td>
                                <td>Last elem. landing</td>
                                <td>0.1/each</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>Order of series</td>
                                <td>0.1/gymn.</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td colspan="3" class="text-center">Composition (C-panel) - notes</td>
                            </tr>
                            <tr>
                                <td>Return back</td>
                                <td colspan="2"></td>
                            </tr>
                            <tr>
                                <td>Jogging together</td>
                                <td colspan="2"></td>
                            </tr>
                            <tr>
                                <td>Add. movements</td>
                                <td colspan="2"></td>
                            </tr>
                            <tr>
                                <td>Rotation direction</td>
                                <td colspan="2"></td>
                            </tr>
                            <tr>
                                <td>Twists</td>
                                <td colspan="2"></td>
                            </tr>
                        </table>
                        <!-- Round 2: end -->

                        <!-- Round 3: start -->
                        <table border="2" width="100%">
                            @foreach($tariffForm->rounds()->whereOrder(3)->first()->series as $series)
                            <tr>
                                <td style="border: none;">
                                    Gymnasts:
                                    @foreach($series->elements as $element)
                                    <img src="{{url($element->symbol)}}">
                                    @endforeach
                                </td>
                                <td style="border: none;" colspan="3" class="text-right">Value:</td>
                                @endforeach
                            </tr>
                            <tr>
                                <td colspan="4" style="border: none;" class="text-right">Difficulty value round 1:</td>
                            </tr>
                            <tr>
                                <td class="text-center">Execution deductions (E-panel)</td>
                                <td class="text-center" colspan="3">Composition deductions (C-panel)</td>
                            </tr>
                            <tr>
                                <td rowspan="5"></td>
                                <td>Last elem. landing</td>
                                <td>0.1/each</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>Order of series</td>
                                <td>0.1/gymn.</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td colspan="3" class="text-center">Composition (C-panel) - notes</td>
                            </tr>
                            <tr>
                                <td>Rotation direction</td>
                                <td colspan="2"></td>
                            </tr>
                            <tr>
                                <td>Twists</td>
                                <td colspan="2"></td>
                            </tr>
                        </table>
                        <!-- Round 3: end -->
                    </div>
                </div>
            </div>
            <div class="box-footer">
            </div>
        </div>
    </div>
</div>

@endsection