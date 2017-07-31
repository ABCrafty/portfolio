<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class HomepageRequest extends FormRequest
{
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
        $rules = [
            'username' => 'required',
            'job' => 'required',
            'age' => 'required',
            'other_projects' => 'required',
            'commitment1_title' => 'required',
            'commitment1_content' => 'required',
            'commitment2_title' => 'required',
            'commitment2_content' => 'required',
            'commitment3_title' => 'required',
            'commitment3_content' => 'required',
            'tech_title' => 'required',
            'tech' => 'required',

        ];

        return $rules;
    }
}
