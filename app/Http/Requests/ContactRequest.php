<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
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
            'tel_celular' => ['required','integer'],
            'thumbnail' => 'mimes:jpeg,png',
            'cep' => ['integer', 'nullable'],
        ];
    }

    public function messages()
    {
        return [
            'nome.required' => 'O campo Nome é obrigatório.',
            'tel_celular.required' => 'O campo Celular é obrigatório.',
            'tel_celular.integer' => 'O campo Celular entrada somente números.',
            'thumbnail.mimes' => 'Arquivo inválido. Somente .jpg, .jpeg, .png',
            'cep.max' => 'O campo Cep é 8 dígitos.',
            'cep.integer' => 'O campo Cep entrada somente números'
        ];
    }
}
