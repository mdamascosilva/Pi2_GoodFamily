<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SenhaRequest extends FormRequest
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
            'senha_atual' => ['required', 'string', 'min:8'],
            'password' => ['required', 'string', 'min:8'],
            'confirm' => ['required', 'string', 'min:8'],
        ];
    }
}
