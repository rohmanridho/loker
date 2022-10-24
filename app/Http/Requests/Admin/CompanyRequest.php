<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class CompanyRequest extends FormRequest
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
            'name' => 'required|max:255',
            'photo' => 'required|image',
            'users_id' => 'required|exists:users,id',
            'industries_id' => 'required|exists:industries,id',
            'provinces_id' => 'required|exists:province,id',
            'description' => 'required'
        ];
    }
}