<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

use Illuminate\Http\Exceptions\HttpResponseException;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Validation\Rule;

class UserRegistrationRequest extends FormRequest

{

    public function rules()
    {
        return [
            'name' => 'required|max:255|min:2',
            'user_name' => 'required|unique:users|max:255|min:6',
            'sponser_user_name' => 'required',
            'position' => ['required',Rule::in(['left', 'right'])]
        ];
    }

    public function failedValidation(Validator $validator)
    {
        throw new HttpResponseException(response()->json([
            'success'   => false,
            'message'   => 'Validation errors',
            'data'      => $validator->errors()
        ]));
    }

    public function messages()
    {
        return [
            'user_name.unique' => 'Username must be unique'
        ];
    }
}