<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreProductRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'code'        => 'required|string|max:50|unique:products,code', // Must be unique and no more than 50 chars
            'name'        => 'required|string|max:250',                    // Required name up to 250 characters
            'quantity'    => 'required|integer|min:1|max:10000',          // Must be an integer between 1 and 10,000
            'price'       => 'required',                                  // Required (should ideally be numeric/decimal validated too)
            'description' => 'nullable|string',                           // Optional text
            'filelink' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048'
        ];
    }
}
