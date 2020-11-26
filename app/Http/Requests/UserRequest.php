<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Str;

class UserRequest extends FormRequest
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
            'username' => 'required|string|unique:users,username',
            'fullname' => 'required',
            'birth_date' => 'required',
            'gender' => 'required',
            'phone' => 'nullable',
            'status' => 'nullable',
            'password' => 'nullable'
        ];
    }
}
