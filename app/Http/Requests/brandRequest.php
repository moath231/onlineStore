<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class brandRequest extends FormRequest
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
        $brand = $this->route('brand');
        return [
            'name' => 'required',
            'description' => ['required','min:16',Rule::unique('brands','description')->ignore($brand)],
            'logo' => $brand ? 'image|mimes:png,jpg,svg|max:2048|dimensions:max_width=560,max_height=400' :'required|image|mimes:png,jpg,svg|max:2048|dimensions:max_width=560,max_height=400',
        ];
    }
}
