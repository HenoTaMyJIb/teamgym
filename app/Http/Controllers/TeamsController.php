<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Models\AgeGroup;
use App\Models\Club;
use App\Models\Competition;
use App\Models\Gender;
use App\Models\Person;
use App\Models\TariffForm;
use App\Models\Team;
use Illuminate\Http\Request;

class TeamsController extends ControllerBase
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
    public function create($competitionId)
    {
        $competition = Competition::findOrFail($competitionId);
        if ($competition->isOpen()) {
            $ageGroups = AgeGroup::all()->lists('name', 'id');
            $genders = Gender::all();
            $clubs = Club::all()->lists('name', 'id');
            $allowedClubs = $this->getAllowedClubs();
            return view('teams.create', compact([
                'ageGroups',
                'clubs',
                'competition',
                'genders',
                'allowedClubs'
            ]));
        } else {
            \Flash::error('Registration is over');
            return redirect('competitions/' . $competition->id);
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request, $competitionId)
    {
        $data = $request->get('team');
        $competition = Competition::findOrFail($competitionId);
        $ageGroup = AgeGroup::findOrFail($data['age_group_id']);
        $club = Club::findOrFail($data['club_id']);
        $gender = Gender::where('code', $data['gender_category'])->first();
        $team = new Team();
        $team->competition()->associate($competition);
        $team->club()->associate($club);
        $team->ageGroup()->associate($ageGroup);
        $team->gender()->associate($gender);
        $team->status = 'draft';
        $team->name = $data['name'];
        $team->creator()->associate($this->getCurrentUser());
        $team->save();
        if ($request->get('gymnasts')) {
            $team->gymnasts()->attach(array_values($request->get('gymnasts')));
        }

        return redirect('teams/' . $team->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return Response
     */
    public function show($id)
    {
        $team = Team::findOrFail($id);
        $ageWarning = $team->ageGroup->name . ': ' . $team->ageGroup->min_age . ' - ' . $team->ageGroup->max_age . ' years old';
        $genderWarning = 'It is ' . strtolower($team->gender->name) . ' team';
        $trampetteTF = $team->tariffForms()->where('discipline_code', '=', 'trampette')->first();
        $tumblingTF = $team->tariffForms()->where('discipline_code', '=', 'tumbling')->first();
        return view('teams.show', compact('team', 'trampetteTF', 'tumblingTF', 'ageWarning', 'genderWarning'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return Response
     */
    public function edit($id)
    {
        $team = Team::findOrFail($id);
        $ageWarning = $team->ageGroup->name . ': ' . $team->ageGroup->min_age . ' - ' . $team->ageGroup->max_age . ' years old';
        $genderWarning = 'It is ' . strtolower($team->gender->name) . ' team';
        $genders = Gender::all();
        $ageGroups = AgeGroup::all()->lists('name', 'id');
        $clubs = Club::all()->lists('name', 'id');
        $competitions = Competition::open()->get()->lists('name', 'id');
        return view('teams.edit', compact('ageGroups', 'clubs', 'competitions', 'team', 'genders', 'ageWarning', 'genderWarning'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int $id
     * @return Response
     */
    public function update($id, Request $request)
    {
        $data = $request->get('team');

        $team = Team::findOrFail($id);
        $ageGroup = AgeGroup::findOrFail($data['age_group_id']);
        $club = Club::findOrFail($data['club_id']);
        $gender = Gender::where('code', $data['gender_category'])->first();
        $team->club()->associate($club);
        $team->ageGroup()->associate($ageGroup);
        $team->gender()->associate($gender);
        $team->status = 'draft';
        $team->name = $data['name'];
        $team->gymnasts()->sync(array_values($request->get('gymnasts')));
        $team->update();

        return redirect('teams/' . $team->id);
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

    public function updateStatus($id, $status)
    {
        $team = Team::findOrFail($id);
        $team->status = $status;
        $team->update();

        return redirect('teams/' . $team->id);
    }

}
