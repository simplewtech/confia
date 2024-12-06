<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductoRequest extends FormRequest
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
            'familia_id' => ['required'],
            'ubicacion_id' => ['required'],
            'nombre' => ['required', 'max:100'],
            'codigo' => ['required', 'max:20'],
            'valor_venta' => ['required'],
            'valor_compra' => ['required'],
            'iva' => ['required'],
        ];
    }
}
