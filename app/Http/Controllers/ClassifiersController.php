<?php namespace App\Http\Controllers;

use App\Models\Classifier;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class ClassifiersController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
        $classifiers = Classifier::all();

        return view('classifiers.index', compact('classifiers'));
	}

}
