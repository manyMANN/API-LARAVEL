<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;


class UpdateEmpleadoRequest extends FormRequest
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
        $method = $this->method();
        if ($method == 'PUT') {
            return [
                'id' => ['required'],
                'nombre' => ['required'],
                'fechanaci' => ['required'],
                'correo' => ['required', 'email'],
                'activo' => ['required', Rule::in([0, 1])],
                'id_activo' => ['require'],
            ];
        } else {
            return [
                'id' => ['required'],
                'nombre' => ['required'],
                'fechanaci' => ['required'],
                'correo' => ['required', 'email'],
                'activo' => ['required', Rule::in([0, 1])],
                'id_activo' => ['require'],
            ];
        }
    }
}
