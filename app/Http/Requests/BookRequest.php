<?php

namespace App\Http\Requests;

use App\Rules\isCover;
use Illuminate\Foundation\Http\FormRequest;

class BookRequest extends FormRequest
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
            'title' => 'required|max:250',
            'isbn' => 'required|min:10|max:15',
            'pages' => 'required|numeric|min:10|max:9999',
            'resume' => 'required|min:30|max:1000',
            'date' => 'date',
            'price' => 'numeric|min:0.1|max:99999',
            'stock' => 'required|integer|min:0|max:999',
            'cover' => [new isCover, 'max:5120'],
            'category_id' => 'exists:categories,id',
        ];
    }

    public function messages()
    {
        return [
            'required' => "El campo :attribute debe estar completo.",
            'max' => "El campo :attribute debe tener un máximo de :max caracteres.",
            'min' => "El campo :attribute debe tener un mínimo de :min caracteres.",
            'numeric' => "El campo :attribute debe tener un valor numérico.",
            'pages.min' => "El campo :attribute debe ser un valor mayor a :min.",
            'pages.max' => "El campo :attribute debe ser un valor menor a :max.",
            'date' => "El campo :attribute debe ser una fecha válida.",
            'price.min' => "El campo :attribute debe ser un valor mayor a :min.",
            'price.max' => "El campo :attribute debe ser un valor menor a :max.",
            'integer' => "El campo :attribute deber tener un valor entero.",
            'stock.min' => "El campo :attribute debe ser un valor mayor a :min.",
            'stock.max' => "El campo :attribute debe ser un valor menor a :max.",
            'mimes' => "El campo :attribute debe ser del tipo jpeg, png, jpg, gif o svg",
            'cover.max' => "El campo :attribute debe ser un valor menor a 5MB.",
            'exists' => "El campo :attribute debe corresponder a un categoria ya existente",

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
