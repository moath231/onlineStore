<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class categoryRequest extends FormRequest
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
        $category = $this->route('category');
        return [
            'name' => 'required',
            'description' => ['required','min:16',Rule::unique('categories','description')->ignore($category)],
            'logo' => $category ? 'image|mimes:png,jpg|max:2048' : 'required|image|mimes:png,jpg|max:2048',
        ];
    }
}
