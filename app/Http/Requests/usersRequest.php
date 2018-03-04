<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class usersRequest extends FormRequest
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
            //
            'name' => 'required',
            'email' => 'required|unique:users,email',
            'password' => 'required'
        ];
    }

    public function messages() {
        return [
            'name.required' => 'Please!!! Fill name',
            'email.required' => 'Please!!! Fill email',
            'email.unique' => 'Please!!! Choose other email',
            'password.required' => 'Please!!! Fill password'
        ];
    }
}
