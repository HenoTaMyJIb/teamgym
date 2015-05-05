<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Requests\JudgeRequest;
use App\Models\Judge;
use App\Models\Person;
use App\Models\Club;


class JudgesController extends Controller {

    public function __construct()
    {
        $this->middleware('auth');
    }
	public function index()
	{
		//
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
    public function create($slug = null)
    {
        if(is_null($slug))
        {
            $slug = 'trefoil'; // TODO logged in user club
        }
        $club = Club::whereSlug($slug)->firstOrFail();

        return view('judges.create', compact('club'));
    }

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
    public function store($slug, JudgeRequest $request)
    {
        $club = Club::whereSlug($slug)->firstOrFail();
        $person = Person::create($request->get('person'));
        $judge = Judge::create($request->get('judge'));

        $judge->person()->associate($person);
        $club->judges()->save($judge);

        flash('New judge added');
        return redirect('clubs/' . $club->slug);
    }

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
    public function edit($id)
    {
        $judge = Judge::findOrFail($id);

        return view('judges.edit', compact('judge'));
    }

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
    public function update($id, JudgeRequest $request)
    {
        $judge = Judge::findOrFail($id);
        $judge->person()->update($request->get('person'));
        // $gymnast->update($request->get('gymnast'));
        //dd($request->get('person'));
        flash('Judge information updated');
        return redirect('clubs/' . $judge->club->slug);
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
