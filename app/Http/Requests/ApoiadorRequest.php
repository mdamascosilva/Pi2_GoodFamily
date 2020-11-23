<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ApoiadorRequest extends FormRequest
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
            'nome' => 'required',
            'cpf' => 'required',
            'telefone' => 'required',
            'cep' => 'required',
            'uf' => 'required',
            'ddd' => 'required',
            'cidade' => 'required',
            'bairro' => 'required',
            'rua' => 'required',
            'complemento_endereco' => 'required'
        ];
    }
}
