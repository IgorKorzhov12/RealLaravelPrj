<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BookRequest extends FormRequest
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
            'name' => 'required|max:100',
            'short_description' => 'required|max:500',
            'description' => 'required|max:1000',
            'quantity' => 'required|integer|min:1|max:1000',
            'genres' => 'required|array',
            'images' => 'required|array',
            'images.*' => 'required|image',
        ];
    }
}
