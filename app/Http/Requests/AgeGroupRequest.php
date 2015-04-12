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
            'min_year' => 'required',
            'max_year' => 'required',
            'rule_type' => 'required',
            'gymnasts_amount' => 'required'
		];
	}

}
