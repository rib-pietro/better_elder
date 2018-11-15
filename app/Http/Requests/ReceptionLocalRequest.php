<?php

namespace better_elder\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ReceptionLocalRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        //add credentials validation
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
            'local_name' => 'required',
            'state' => 'required',
            'zipcode' => 'required|min:8',
            'city_name' => 'required',
            'street' => 'required',
            'complement' => 'required|max:100',
            'number' => 'required',
            'street' => 'required',
        ];
    }
}
