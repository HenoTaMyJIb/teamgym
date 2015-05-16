<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Competition;
use Carbon\Carbon;
use Illuminate\Http\Request;

class CompetitionsController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $competitions = Competition::all();
        return view('competitions.index', compact('competitions'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('competitions.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {
        $data = $request->all();
        $competitionDates = explode('-', $request->get('competition_date'));
        $startDate = trim($competitionDates[0]);
        $endDate = trim($competitionDates[1]);

        $registrationDates = explode('-', $request->get('registration_date'));
        $regStart = trim($registrationDates[0]);
        $regEnd = trim($registrationDates[1]);

        $competition = new Competition();
        $competition->name = $data['name'];
        $competition->address = $data['address'];
        $competition->start_date = $startDate;
        $competition->end_date = $endDate;
        $competition->reg_start = $regStart;
        $competition->reg_end = $regEnd;
        $competition->save();
        
        return redirect('competitions');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        $competition = Competition::findOrFail($id);
        $teams = $competition->teams();
        $isRegister = Carbon::now()->between(Carbon::parse($competition->reg_start), Carbon::parse($competition->reg_end));

        return view('competitions.show', compact(['competition', 'teams', 'isRegister']));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }

}
