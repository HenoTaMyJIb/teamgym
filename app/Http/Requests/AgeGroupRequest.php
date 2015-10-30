<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class AgeGroupRequest extends Request {

	/**
	 * Determine if the user is authorized to make this request.
	 *
	 * @return bool
	 */
	public function authorize()
	{
		return true;
	}

	/**
	 * Get the validation rules that apply to the request.
	 *
	 * @return array
	 */
	public function rules()
	{
		return [
			'name' => 'required',
            'min_age' => 'required',
            'max_age' => 'required',
            'code_of_points' => 'required',
            'gymnasts_amount' => 'required'
		];
	}

}
