<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CompetenceRequest extends FormRequest
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
            'intitule' => ['required', 'string', 'max:120'],
            'description' => ['required', 'string', 'max:500'],
        ];
    }

    public function messages() {
        return [
            'description.required' => 'La description est obligatoire.',
            'description.string' => 'La description doit être un texte.',
            'description.max' => 'La description peut contenir 500 caractères maximum.',
            'intitule.required' => 'L\'intitulé est obligatoire.',
            'intitule.string' => 'L\'intitulé doit être un texte.',
            'intitule.max' => 'L\'intitulé peut contenir 120 caractères maximum.'
        ];
    }
}
