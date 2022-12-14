<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class ServicoRequest extends FormRequest
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
            'nome' => ['required', 'min:2',  'max:255'],
            'valor_minimo' => ['required', 'numeric'],
            'quantidade_horas' => ['required', 'integer'],
            'porcentagem' => ['required', 'integer'],
            'valor_quarto' => ['required', 'numeric'],
            'horas_quarto' => ['required', 'integer'],
            'valor_sala' => ['required', 'numeric'],
            'horas_sala' => ['required', 'integer'],
            'valor_banheiro' => ['required', 'numeric'],
            'horas_banheiro' => ['required', 'integer'],
            'valor_cozinha' => ['required', 'numeric'],
            'horas_cozinha' => ['required', 'integer'],
            'valor_quintal' => ['required', 'numeric'],
            'horas_quintal' => ['required', 'integer'],
            'valor_outros' => ['required', 'numeric'],
            'horas_outros' => ['required', 'integer'],
            'icone' => ['required', Rule::in(['twf-cleaning1', 'twf-cleaning2', 'twf-cleaning3'])], //faz validação
            'posicao' => ['required', 'integer'],

        ];
    }

    public function validationData()
    {
        $dados = $this->all();

        $dados['valor_minimo'] = $this->formataValorMonetario($dados['valor_minimo']);
        $dados['valor_quarto'] = $this->formataValorMonetario($dados['valor_quarto']);
        $dados['valor_sala'] = $this->formataValorMonetario($dados['valor_sala']);
        $dados['valor_banheiro'] = $this->formataValorMonetario($dados['valor_banheiro']);
        $dados['valor_cozinha'] = $this->formataValorMonetario($dados['valor_cozinha']);
        $dados['valor_quintal'] = $this->formataValorMonetario($dados['valor_quintal']);
        $dados['valor_outros'] = $this->formataValorMonetario($dados['valor_outros']);

        $this->replace($dados);

        return $dados;
    }

    protected function formataValorMonetario(string $valor)
    {
        return  str_replace(['.', ','], ['', '.'], $valor);

    }
}
