<?php

namespace App\Http\Controllers;


use App\Models\AgeGroup;
use App\Models\Club;
use App\Models\Discipline;
use App\Models\Gymnast;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;

class ControllerBase extends Controller
{

    public function __construct()
    {
        $ageGroupsMenu = AgeGroup::all();
        $disciplinesMenu = Discipline::all();
        $countries = json_decode(file_get_contents(base_path('public/countries.json')));
        $allowedClubs = [];
        $personName = null;

        $user = Auth::user();
        if ($user) {
            if ($user->isAdmin()) {
                $allowedClubs = Club::all();
            } else if ($user->isCoach()) {
                $coach = $user->person->coach;
                if ($coach) {
                    $allowedClubs = Gymnast::find($coach->club_id);
                }
            }
            $allowedClubs = $allowedClubs->lists('name', 'id');
            $personName = $user->person->getFullName();
        }

        View::share(compact('ageGroupsMenu', 'disciplinesMenu', 'countries', 'allowedClubs', 'personName'));
    }


} 