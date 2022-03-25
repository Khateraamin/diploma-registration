<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreDiplomaRequest extends FormRequest
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
        return [
            'diploma_id' => 'required|unique:diplomas,diploma_id|max:255',
            'name' => 'required|max:255',
            'last_name' => 'required|max:255',
            'father_name' => 'required|max:255',
            'g_father_name' => 'required|max:255',
            'date_of_birth' => 'required|date',
            'addmission_date' => 'required|date',
            'graduation_date' => 'required|date',
            'department' => 'required|max:255',
            'phone' => 'required|unique:diplomas,phone|max:255',
            'email' => 'required|email|unique:diplomas,email|max:255',
            'monograph_completed' => 'required|boolean',
            'province' => 'required|max:255',
            'district' => 'required|max:255',
            'village' => 'required|max:255',
            'current_province' => 'required|max:255',
            'current_district' => 'required|max:255',
            'current_village' => 'required|max:255',
        ];
    }
}
