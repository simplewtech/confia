<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EmpresaRequest extends FormRequest
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
            'nombre' => ['required', 'max:100'],
            'nit' => ['required', 'max:20'],
            'regimen' => ['required', 'max:100'],
            'representante_legal' => ['required', 'max:150'],
            'documento_representante_legal' => ['required', 'max:20'],
            'direccion' => ['required', 'max:100'],
            'telefono' => ['required', 'max:20'],
        ];
    }
}
