<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Requests\GymnastRequest;
use App\Models\Gymnast;
use App\Models\Club;
use App\Models\Person;
use Illuminate\Support\Facades\Auth;

class GymnastsController extends ControllerBase
{

    public function __construct()
    {
        parent::__construct();
        $this->middleware('auth');
    }

    public function index()
    {
        $user = Auth::user();
        if ($user->isAdmin()) {
            $gymnasts = Gymnast::all();
        } else if ($user->isCoach()) {
            $coach = $user->person->coach;
            if ($coach) {
                $gymnasts = Gymnast::whereClubId($coach->club_id)->get();
            }
        }
        return view('gymnasts.index', compact('gymnasts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        $user = Auth::user();
        if($user->isAdmin()) {
            $clubs = Club::all();
        } else if ($user->isCoach()) {
            $coach = $user->person->coach;
            if ($coach) {
                $clubs = Gymnast::find($coach->club_id);
            }
        }
        $clubs = $clubs->lists('name', 'id');
        return view('gymnasts.create', compact('clubs'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param GymnastRequest $request
     * @return Response
     */
    public function store(GymnastRequest $request)
    {
        $club = Club::findOrFail($request->get('club'));
        $person = Person::create($request->get('person'));
        $gymnast = new Gymnast();
        $gymnast->person()->associate($person);
        $club->gymnasts()->save($gymnast);

        flash('New gymnast added');
        return redirect('gymnasts');
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
        $gymnast = Gymnast::findOrFail($id);
        $user = Auth::user();
        if($user->isAdmin()) {
            $clubs = Club::all();
        } else if ($user->isCoach()) {
            $coach = $user->person->coach;
            if ($coach) {
                $clubs = Gymnast::find($coach->club_id);
            }
        }
        $clubs = $clubs->lists('name', 'id');
        return view('gymnasts.edit', compact('gymnast', 'clubs'));
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
        flash('Gymnast information updated');
        return redirect('gymnasts');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return Response
     */
    public function destroy($id)
    {
        $gymnast = Gymnast::findOrFail($id);
        $gymnast->delete();
        $gymnast->person->delete();

        flash('Gymnast "' . $gymnast->person->getFullName() . '" deleted');
        return redirect('gymnasts');
    }

}
