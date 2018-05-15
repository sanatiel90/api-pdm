<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
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
            'nome' => 'required|max:255',
            'local' => 'required|max:255',
            'categoria' => 'required|max:150',
            'preco' => 'required|numeric',
        ];
    }


    public function messages(){
        return [
             'nome.required' => 'Preencha o nome do produto',
             'nome.max' => 'Informe no máximo 255 caracteres para o produto',
             'local.required' => 'Preencha o nome do local',
             'local.max' => 'Informe no máximo 255 caracteres para o local',
             'categoria.required' => 'Preencha a categoria',
             'categoria.max' => 'Informe no máximo 150 caracteres para a categoria',
             'preco.required' => 'Informe o preço',
             'preco.numeric' => 'Informe números para o preço'         

        ];


    }
}
