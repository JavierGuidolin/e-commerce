<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AdminRequest extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        return
            [
            'name' => ['required', 'string', 'max:50'],
            'surname' => ['required', 'string', 'max:50'],
            'email' => ['required', 'string', 'email', 'max:100', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'max:50', 'confirmed'],
        ];
    }

    public function messages()
    {
        return [
            'required' => "El :attribute debe estar completo",
            'string' => "El :attribute debe ser caracteres alfanuméricos",
            'unique' => "El :attribute ingresado ya se encuentra registrado",
            'confirmed' => "Las contraseñas deben coincidir",

            'name.max' => "El :attribute debe tener :max como máximo",
            'surname.max' => "El :attribute debe tener :max como máximo",
            'email' => "Debe ingresar un :attribute válido",
            'password.min' => "La :attribute debe tener :min caracteres",
            'password.max' => "La :attribute debe tener :max caracteres como máximo",

        ];
    }

    public function attributes()
    {
        return [
            'name' => 'name',
            'surname' => 'apellido',
            'password' => 'contraseña',
            'email' => 'email',
            'repassword' => 'validacion de contraseña'];
    }
}
