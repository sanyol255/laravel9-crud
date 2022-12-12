<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserCreateRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'name' => ['required', 'alpha', 'min:4', 'max:200'],
            'email' => ['required', 'max:300'],
            'password' => ['required', 'min:8', 'max:30']
        ];
    }
}
