<?php namespace App\Http\Requests;

use App\Http\Requests\Request;
use App\Models\Gymnast;
use App\Models\Person;
use Illuminate\Support\Facades\Auth;

class GymnastRequest extends Request {

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
        $gymnast = Gymnast::find($this->segment(2));
        $id = empty($gymnast) ? 'NULL' : $gymnast->person->id;
        return [
            'person.first_name' => 'required',
            'person.last_name' => 'required',
            'person.code' => 'unique:people,code,'.$id.',id,deleted_at,NULL',
        ];
    }

}
