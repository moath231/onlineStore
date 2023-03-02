<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class productRequest extends FormRequest
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
        $product = $this->route('product');
        return [
            'Name' => 'required',
            'Discrption' => ['required', 'min:45', 'max:70', Rule::unique('products', 'shortDescription')->ignore($product)],
            'longDiscrption' => 'required|min:200',
            'Stock' => 'required',
            'Model' => 'required',
            'Color' => '',
            'Size' => '',
            'image1' => $product ? 'nullable|mimes:jpeg,png,jpg|max:2048' : 'required|mimes:jpeg,png,jpg|max:2048',
            'image2' => 'mimes:jpeg,png,jpg|max:2048',
            'image3' => 'mimes:jpeg,png,jpg|max:2048',
            'image4' => 'mimes:jpeg,png,jpg|max:2048',
            'price' => 'required|numeric',
            'category' => 'required',
            'brand' => 'required',
        ];
    }
}
