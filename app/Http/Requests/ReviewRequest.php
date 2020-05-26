<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ReviewRequest extends FormRequest
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
            'review' => 'required|min:10|max:255',
            'rating' => 'required|int|min:1|max:5',
            'book_id' => 'exists:books,id',
            'user_id' => 'exists:books,id',
        ];

    }

    public function messages()
    {

        return [
            'required' => 'El campo :attribute debe estar completo',
            'review.min' => 'El campo :attribute debe tener al menos :min caracteres',
            'review.max' => 'El campo :attribute debe tener :max caracteres como máximo',
            'rating.min' => 'El campo :attribute debe ser superior a uno',
            'rating.max' => 'El campo :attribute no debe ser superior a cinco',
            'exists' => 'El registro no se encuentra en nuestra BD',
        ];
    }
    public function attributes()
    {
        return [
            'book_id' => 'libro',
            'user_id' => 'usuario',
        ];
    }
}
