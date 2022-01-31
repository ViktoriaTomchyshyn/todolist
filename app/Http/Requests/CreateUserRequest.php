<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateUserRequest extends FormRequest
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
            'firstname'=>'required|max:255',
            'lastname'=>'required|max:255|min:3',
            'email'=>'required|email|max:255|unique:users,email',
            'password'=>'required|min:6|max:255|same:passwordConfirmation',
            'subscription'=>'required'
        ];
    }
}
