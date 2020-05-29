<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
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
        return [
            "fname" => "required|min:3|max:50",
            "lname" => "required|min:3|max:50",
            "email" => "required|email",
            "message" => "required|min:20|max:500",
        ];
    }

    public function messages()
    {
        return [
            'required' => "El campo :attribute debe estar completo.",
            'max' => "El campo :attribute debe tener un máximo de :max caracteres.",
            'min' => "El campo :attribute debe tener un mínimo de :min caracteres.",
            'email' => "El campo :attribute no es un email válido.",

        ];
    }

    public function attributes()
    {
        return [
            'fname' => 'nombre',
            'lname' => 'apellido',
            'email' => 'email',
            'message' => 'mensaje',
        ];
    }
}
