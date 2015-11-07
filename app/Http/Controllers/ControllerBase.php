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

        $user = Auth::user();
//        if ($user) {
//            $personName = $user->person->getFullName();
//        }

        View::share(compact('ageGroupsMenu', 'disciplinesMenu', 'countries', 'user'));
    }

    public function getCurrentUser()
    {
        return Auth::user();
    }

    public function getAllowedClubs()
    {
        $user = $this->getCurrentUser();
        if ($user) {
            if ($user->isAdmin()) {
                $allowedClubs = Club::all();
            } else if ($user->isCoach()) {
                $coach = $user->person->coach;
                if ($coach) {
                    $allowedClubs = Club::where('id', $coach->club_id)->get();
                }
            }
        }
        return $allowedClubs;
    }


} 