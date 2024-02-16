<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MetierRequest extends FormRequest
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
            'libelle' => ['required', 'max:120', 'string'],
            'description' => ['required', 'string', 'max:500'],
            'slug' => ['required', 'string', 'max:120']
        ];
    }
}
