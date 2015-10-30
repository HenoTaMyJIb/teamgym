<?php namespace App\Http\Controllers;

use App\Models\AgeGroup;
use App\Http\Requests;
use App\Http\Requests\AgeGroupRequest;
use App\Models\CodeOfPoint;
use App\Models\GymnastAmount;
use Illuminate\Http\Request;

class AgeGroupsController extends ControllerBase
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
        $amount = GymnastAmount::all()->lists('name', 'code');
        $rules = CodeOfPoint::all()->lists('name', 'code');
        return view('age-groups.create', compact(['amount', 'rules']));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  AgeGroupRequest $request
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
     * @param  int $id
     * @return Response
     */
    public function show($id)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $slug
     * @return Response
     */
    public function edit($slug)
    {
        $amount = GymnastAmount::all()->lists('name', 'code');
        $rules = CodeOfPoint::all()->lists('name', 'code');
        $ageGroup = AgeGroup::whereSlug($slug)->firstOrFail();
        return view('age-groups.edit', compact(['ageGroup', 'amount', 'rules']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int $slug
     * @param  AgeGroupRequest $request
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
     * @param  int $slug
     * @param  Request $request
     * @return Response
     */
    public function destroy($slug, Request $request)
    {
        $ageGroup = AgeGroup::whereSlug($slug)->firstOrFail();
        $ageGroup->delete();

        return redirect('age-groups');
    }

}
