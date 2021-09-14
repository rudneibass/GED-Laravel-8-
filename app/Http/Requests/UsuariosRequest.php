<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UsuariosRequest extends FormRequest
{

    protected $method;

    public function __construct()
    {
        $this->method = $_SERVER['REQUEST_METHOD'];
    }

    public function authorize()
    {
        return true;
    }


    public function rules()
    {
        if ($this->method == 'POST') {
            return [
                'nome' => 'required',
                'login' => 'required | unique:App\Models\UsuariosModel,login',
                'email' => 'required | email | unique:App\Models\UsuariosModel,email',
                'confirma_senha' => 'required',
                'tipo' => 'required',
                'ativo' => 'required',
                'senha' => [
                    'required',
                    function ($attribute, $value, $fail) {
                        if ($_REQUEST['senha'] <> $_REQUEST['confirma_senha']) {
                            return $fail("Os campos 'Senha' e 'Confirmar Senha' devem ser iguais!");
                        }
                    }
                ]
            ];
        } elseif ($this->method == 'PUT' or 'PATCH') {
            return [
                'nome' => 'required',
                'login' => 'required',
                'email' => 'required | email ',
                'confirma_senha' => 'required',
                'tipo' => 'required',
                'ativo' => 'required',
                'senha' => [
                    'required',
                    function ($attribute, $value, $fail) {
                        if ($_REQUEST['senha'] <> $_REQUEST['confirma_senha']) {
                            return $fail("Os campos 'Senha' e 'Confirmar Senha' devem ser iguais!");
                        }
                    }
                ]
            ];
        }
    }

    public function messages()
    {
        return [
            'nome.required' => 'O campo Nome é obrigatótio',
        ];
    }
}
