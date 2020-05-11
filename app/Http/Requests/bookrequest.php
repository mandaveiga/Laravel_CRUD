<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class bookrequest extends FormRequest
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
            'title' => 'required',
            'pages' => 'required|numeric',
            'price' => 'required|numeric'
        ];
    }

    public function messages()
    {
        return [
            'title.required' => 'Um livro possui titulo!',
            'pages.required' => 'Um livro possui paginas!',
            'pages.numeric' => 'Confira a quantidade de paginas digitadas',
            'price.numeric' => 'Confira o valor digitado para o preço'
        ];
    }
}
