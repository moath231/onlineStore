<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class userRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'FirstName' => 'required|string',
            'LastName' => 'required|string',
            'email' => 'required|email',
            'gender' => ['required',Rule::in(['male','female'])],
            'address' => 'required',
            'city' => ['required','regex:/^\b\w+\b$/'],
            'country' => ['required'],
            'password' => 'required|confirmed',
        ];
    }
}
