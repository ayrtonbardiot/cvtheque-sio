<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProfessionnelRequest extends FormRequest
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
        if(!isset($this->formation) || $this->formation == "0")
            $this->formation = 0;
        else
            $this->formation = 1;

        $this->merge([
            'formation' => $this->formation,
        ]);
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'prenom' => ['required', 'string', 'max:25'],
            'nom' => ['required', 'string', 'max:40'],
            'cp' => ['required', 'string', 'min:5', 'max:5'],
            'ville' => ['required', 'string', 'max:38'],
            'telephone' => ['required', 'string', 'max:14'],
            'email' => ['required', 'email:rfc,dns'],
            'naissance' => ['required', 'date_format:Y-m-d'],
            'formation' => ['required'],
            'domaine' => ['required', 'array', 'min:1'],
            'metier_id' => ['required'],
            'source' => ['max:191'],
            'observation' => []
        ];
    }
}
