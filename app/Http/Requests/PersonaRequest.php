<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PersonaRequest extends FormRequest
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
            'tipo_persona_id' => ['required'],
            'nombre' => ['required', 'max:100'],
            'apellido' => ['required', 'max:100'],
            'documento' => ['required', 'max:20'],
            'celular' => ['required', 'max:10'],
            'email' => ['required', 'max:100', 'email'],
            'password' => ['required', 'max:100'],
        ];
    }
}
