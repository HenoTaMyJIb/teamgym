<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Requests\CoachRequest;
use App\Models\Club;
use App\Models\Coach;
use App\Models\Person;

class CoachesController extends Controller {

    /**
     * Create a new controller instance.
     *
     */
    public function __construct()
    {
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
     * @param null $slug
     * @return \Illuminate\View\View
     */
    public function create($slug = null)
	{
        if(is_null($slug))
        {
            $slug = 'trefoil'; // TODO logged in user club
        }
        $club = Club::whereSlug($slug)->firstOrFail();

        return view('coaches.create', compact('club'));
	}

    /**
     * Store a newly created resource in storage.
     *
     * @param $slug
     * @param CoachRequest $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store($slug, CoachRequest $request)
	{
        $club = Club::whereSlug($slug)->firstOrFail();
        $person = Person::create($request->get('person'));
        $coach = Coach::create($request->get('coach'));

        $coach->person()->associate($person);
        $club->coaches()->save($coach);

        flash('New coach added');
        return redirect('clubs/' . $club->slug);
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
        $coach = Coach::findOrFail($id);

		return view('coaches.edit', compact('coach'));
	}

    /**
     * Update the specified resource in storage.
     *
     * @param $id
     * @param CoachRequest $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update($id, CoachRequest $request)
	{
        $coach = Coach::findOrFail($id);
        $coach->person()->update($request->get('person'));
        $coach->update($request->get('coach'));

        flash('Coach information updated');
        return redirect('clubs/' . $coach->club->slug);
	}

    /**
     * Remove the specified resource from storage.
     *
     * @param $id
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function destroy($id)
	{
        $coach = Coach::findOrFail($id);
        $coach->delete();

        flash('Coach "' . $coach->person->getFullName() . '" deleted');
        return redirect('clubs/' . $coach->club->slug);
	}

}
