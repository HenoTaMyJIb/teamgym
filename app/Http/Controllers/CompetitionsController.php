<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Models\AgeGroup;
use App\Models\Competition;
use Carbon\Carbon;
use Illuminate\Http\Request;

class CompetitionsController extends ControllerBase
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

        $competition = new Competition();
        $competition->name = $data['name'];
        $competition->address = $data['address'];
        $competition->start_date = $data['start_date'];
        $competition->pre_reg_end = $data['pre_reg_end'];
        $competition->reg_start = $data['reg_start'];
        $competition->reg_end = $data['reg_end'];
        $competition->creator()->associate($this->getCurrentUser());
        $competition->save();

        return redirect('competitions');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return Response
     */
    public function show($id)
    {
        $competition = Competition::findOrFail($id);
        $teams = $competition->teams()->get();
        $isRegister = Carbon::now()->between(Carbon::parse($competition->reg_start), Carbon::parse($competition->reg_end));

        return view('competitions.show', compact([
            'competition',
            'teams',
            'isRegister'
        ]));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return Response
     */
    public function edit($id)
    {
        $competition = Competition::findOrFail($id);
        return view('competitions.edit', compact(['competition']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int $id
     * @return Response
     */
    public function update($id, Request $request)
    {
        $data = $request->all();

        $competition = Competition::findOrFail($id)->first();
        $competition->name = $data['name'];
        $competition->address = $data['address'];
        $competition->start_date = $data['start_date'];
        $competition->pre_reg_end = $data['pre_reg_end'];
        $competition->reg_start = $data['reg_start'];
        $competition->reg_end = $data['reg_end'];
        $competition->save();

        return redirect("competitions/$id");
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

    public function stats($id)
    {
        $competition = Competition::findOrFail($id);
        $ageGroups = AgeGroup::all();
        return view('competitions.stats', compact(['competition', 'ageGroups']));
    }

}
