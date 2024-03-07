<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Str;
use Illuminate\Validation\Rule;

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
     * Prepare the data for validation.
     */
    protected function prepareForValidation(): void
    {
        $this->merge([
            'slug' => Str::slug($this->slug),
        ]);
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        $rules =  [
            'libelle' => ['required', 'max:120', 'string'],
            'description' => ['required', 'string', 'max:500'],
            'slug' => ['required', 'string', 'max:120']
        ];
        if($this->method() == 'PUT' || $this->method() == 'PATCH') {
            $rules['slug'][] = Rule::unique('metiers', 'slug')->ignore(old($this->slug), 'slug');
        } else {
            $rules['slug'][] = 'unique:metiers';
        }
        return $rules;
    }
}
