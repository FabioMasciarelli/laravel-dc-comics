<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreComicRequest extends FormRequest
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
            'title' => 'required | min:5',
            'description' => 'required | min:20',
        ];
    }

        /**
     * Get custom messages for validator errors.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'title.required' => 'Il titolo è vuoto',
            'title.min' => 'Il titolo deve contenere almeno 5 caratteri',
            'description.required' => 'La descrizione è vuota',
            'description.min' => 'La descrizione deve contenere almeno 20 caratteri'
        ];
    }
}
