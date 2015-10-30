<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Models\AgeGroup;
use App\Models\Element;
use App\Models\Gender;
use App\Models\Gymnast;
use Illuminate\Http\Request;

class ApiController extends ControllerBase
{

    public function gymnasts(Request $request)
    {
        $clubId = $request->get('club');
        $gymnasts = Gymnast::where('club_id', '=', $clubId)->with('person')->get();
        return $gymnasts;
    }

    public function elements(Request $request)
    {
        $discipline = $request->get('discipline');
        $codeOfPoints = $request->get('cop');
        $query = $request->get('q');

        $elements = Element::with(['elementValues' => function ($query) use ($codeOfPoints) {
                $query->where('code_of_points', '=', $codeOfPoints);

        }]);

        if ($discipline) {
            $elements = $elements->where('discipline_code', '=', $discipline);
        }

        if ($query) {
            $elements = $elements->where('name', 'like', '%' . $query .'%');
        }

        $elements = $elements->get();


        return $elements;
    }

    public function ageGroups(Request $request)
    {
        $id = $request->get('id');
        $ageGroup = AgeGroup::findOrFail($id);

        return $ageGroup;
    }

    public function check(Request $request)
    {
        $response = [];
        $response['message'] = [];
        $response['status'] = 1;
        $ageGroup = AgeGroup::findOrFail(intval($request->get('ageGroup')));
        $gender = Gender::where('code', '=', $request->get('gender'))->first();
        $gymnast = Gymnast::where('id', '=', intval($request->get('gymnast')))->with('person')->first();
        if(($gymnast->person->age > $ageGroup->max_age) || ($gymnast->person->age < $ageGroup->min_age)) {
            array_push($response['message'], $ageGroup->name .': ' . $ageGroup->min_age . ' - ' . $ageGroup->max_age . ' years old');
            $response['status'] = 0;
        }

        if($gender->code !== 'mix' && $gymnast->person->gender !== $gender->code) {
            array_push($response['message'], 'It is ' . strtolower($gender->name) . ' team');
            $response['status'] = 0;
        }

        return json_encode($response);
    }

}
