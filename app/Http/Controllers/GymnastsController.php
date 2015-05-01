<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Requests\GymnastRequest;
use App\Models\Gymnast;
use App\Models\Club;
use App\Models\Person;

class GymnastsController extends Controller {

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
	{

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

        return view('gymnasts.create', compact('club'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param $slug
     * @param GymnastRequest $request
     * @return Response
     */
    public function store($slug, GymnastRequest $request)
    {
        $club = Club::whereSlug($slug)->firstOrFail();
        $person = Person::create($request->get('person'));
        $gymnast = new Gymnast();

        $gymnast->person()->associate($person);
        $club->gymnasts()->save($gymnast);

        flash('New gymnast added');
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
        $gymnast = Gymnast::findOrFail($id);

        return view('gymnasts.edit', compact('gymnast'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int $id
     * @param GymnastRequest $request
     * @return Response
     */
    public function update($id, GymnastRequest $request)
    {
        $gymnast = Gymnast::findOrFail($id);
        $gymnast->person()->update($request->get('person'));
       // $gymnast->update($request->get('gymnast'));
        //dd($request->get('person'));
        flash('Gymnast information updated');
            return redirect('clubs/' . $gymnast->club->slug);
    }

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
    public function destroy($id)
    {
        $gymnast = Gymnast::findOrFail($id);
        $gymnast->delete();

        flash('Gymnast "' . $gymnast->person->getFullName() . '" deleted');
        return redirect('clubs/' . $gymnast->club->slug);
    }

}
