<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FieldRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'name' => 'required',
            'cpf' => 'required|numeric|unique:users,cpf',
            'email' => 'required|unique:users,email',
            'funcao' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Item obrigatório.',
            'cpf.required' => 'Item obrigatório.',
            'cpf.numeric' => 'Campo deve conter apenas números.',
            'cpf.unique' => 'Este CPF já está cadastrado.',
            'email.required' => 'Item obrigatório.',
            'email.unique' => 'Este email já está cadastrado.',
            'funcao.required' => 'Item obrigatório.',
        ];
    }
}
