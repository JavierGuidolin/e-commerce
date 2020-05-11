<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Rules\isCover;

class AuthorRequest extends FormRequest
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
            'file' => [new isCover, 'max:5120'],
        ];
    }

    public function messages()
    {
        return [
            'required' => "El :attribute debe estar completo",
            'string' => "El :attribute debe ser caracteres alfanuméricos",
            'name.max' => "El :attribute debe tener :max como máximo",
            'surname.max' => "El :attribute debe tener :max como máximo",
            'file.max' => "El campo :attribute debe ser un valor menor a 5MB."
        ];
    }

    public function attributes()
    {
        return [
            'title' => 'titulo',
            'isbn' => 'ISBN',
            'pages' => 'n° de páginas',
            'resume' => 'resumen',
            'date' => 'fecha de publicacion',
            'price' => 'precio',
            'stock' => 'stock',
            'cover' => 'cover',
            'category_id' => 'categoria',
        ];
    }
}
