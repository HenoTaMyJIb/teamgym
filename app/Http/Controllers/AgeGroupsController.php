<?php namespace App\Http\Controllers;

use App\Models\AgeGroup;
use App\Http\Requests;
use App\Http\Requests\AgeGroupRequest;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AgeGroupsController extends Controller {

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
        $ageGroups = AgeGroup::all();

        return view('age-groups.index', compact('ageGroups'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('age-groups.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
     * @param  AgeGroupRequest  $request
	 * @return Response
	 */
	public function store(AgeGroupRequest $request)
	{
        AgeGroup::create($request->all());

        return redirect('age-groups');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $slug
	 * @return Response
	 */
	public function edit($slug)
	{
        $ageGroup = AgeGroup::whereSlug($slug)->firstOrFail();
		return view('age-groups.edit', compact('ageGroup'));
	}

	/**
	 * Update the specified resource in storage.
	 *
     * @param  int  $slug
     * @param  AgeGroupRequest  $request
	 * @return Response
	 */
	public function update($slug, AgeGroupRequest $request)
	{
        $ageGroup = AgeGroup::whereSlug($slug)->firstOrFail();
        $ageGroup->update($request->all());

        return redirect('age-groups');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $slug
     * @param  Request  $request
	 * @return Response
	 */
	public function destroy($slug, Request $request)
	{
        $ageGroup = AgeGroup::whereSlug($slug)->firstOrFail();
        $ageGroup->delete();

        return redirect('age-groups');
	}

}
