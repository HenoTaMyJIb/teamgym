<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Models\Discipline;
use App\Models\Gender;
use App\Models\Round;
use App\Models\Series;
use App\Models\TariffForm;
use App\Models\Team;
use Illuminate\Http\Request;

class TariffFormsController extends ControllerBase
{

    /**
     * Create a new controller instance.
     *
     */
    public function __construct()
    {
        parent::__construct();
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create($discipline, $id)
    {
        $team = Team::findOrFail($id);
        $discipline = Discipline::whereCode($discipline)->firstOrFail();;
        return view('tariff-forms.create', compact('team', 'discipline'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {
        $tariffForm = TariffForm::create(array('team_id' => $request->get('team_id'), 'discipline_code' => $request->get('discipline')));
        foreach ($request->get('round') as $orderRound => $r) {
            $round = Round::create(array('tariff_form_id' => $tariffForm->id, 'order' => $orderRound));
            foreach ($r as $orderSeries => $s) {
                $series = Series::create(array('round_id' => $round->id, 'order' => $orderSeries));
                foreach ($s as $elements) {
//                        dd($elements);
                    $series->elements()->attach($elements);
                }
            }

        }

        dd($round);
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return Response
     */
    public function show($id)
    {
        $tariffForm = TariffForm::findOrFail($id);
        $genders = Gender::all();
        return view('tariff-forms.show', compact('tariffForm', 'genders'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int $id
     * @return Response
     */
    public function update($id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }

    public function pdf()
    {
        $tariffForm = TariffForm::findOrFail(16);
        $genders = Gender::all();
        $pdf = \App::make('dompdf.wrapper');
        $pdf->loadView('tariff-forms.pdf', compact('tariffForm', 'genders'));
        return $pdf->stream();
    }

}
