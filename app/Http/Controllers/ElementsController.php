<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Models\AgeGroup;
use App\Models\CodeOfPoint;
use App\Models\Element;
use Illuminate\Http\Request;
use Illuminate\Routing\Route;

class ElementsController extends ControllerBase
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

    public function tumbling($ageGroup)
    {
        $title = 'Tumbling';
        $ageGroup = AgeGroup::whereSlug($ageGroup)->firstOrFail();
        $elements = Element::whereHas('elementValues', function ($q) use($ageGroup) {
            $q->where('code_of_points', '=', $ageGroup->code_of_points);

        })->whereDisciplineCode('tumbling')->get();
//        $elements = [];

        return view('elements.tumbling-trampette', compact('elements', 'ageGroup', 'title'));
    }

    public function floor($ageGroup)
    {
        $ageGroup = AgeGroup::whereSlug($ageGroup)->firstOrFail();
        $elements = Element::whereHas('elementValues', function ($q) use($ageGroup) {
            $q->where('code_of_points', '=', $ageGroup->code_of_points);

        })->get();

        return view('elements.floor', compact('elements', 'ageGroup'));
    }

    public function trampette($ageGroup)
    {
        $title = 'Trampette';
        $ageGroup = AgeGroup::whereSlug($ageGroup)->firstOrFail();
        $elements = Element::whereHas('elementValues', function ($q) use($ageGroup) {
            $q->where('code_of_points', '=', $ageGroup->code_of_points);

        })->whereDisciplineCode('trampette')->get();

        return view('elements.tumbling-trampette', compact('elements', 'ageGroup', 'title'));
    }

    public function index()
    {
        $elements = Element::all();
        $rules = CodeOfPoint::all();

        return view('elements.index', compact('elements', 'rules'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store()
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return Response
     */
    public function show($id)
    {
        //
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

}
