<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
{

    protected $errorBag = 'UpdateInfo';

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
        return [
            'name' => ['required', 'string', 'min:3', 'max:50'],
            'surname' => ['required', 'string', 'min:3', 'max:50'],
            'dni' => ['required', 'string', 'min:8', 'max:8'],
        ];
    }

    public function messages()
    {
        return [
            'required' => "El :attribute debe estar completo.",
            'string' => "El :attribute debe ser caracteres alfanuméricos.",
            'max' => "El :attribute debe tener :max caracteres como máximo.",
            'min' => "El :attribute debe tener al menos :min caracteres.",
        ];
    }

    public function attributes()
    {
        return [
            'name' => 'nombre',
            'surname' => 'apellido',
            'dni' => 'dni',
        ];
    }

}
