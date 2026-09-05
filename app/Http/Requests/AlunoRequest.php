<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class AlunoRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        $alunoId = $this->route('aluno');

        return [
            'nome' => 'required|string|max:255',
            'email' => [
                'required',
                'email',
                Rule::unique('alunos', 'email')->ignore($alunoId),
            ],
            'curso' => 'required|string|max:255',
        ];
    }

    public function messages(): array
{
    return [
        'nome.required' => 'O nome do aluno é obrigatório.',
        'nome.max' => 'O nome não pode ter mais que 255 caracteres.',
        'email.required' => 'O email é obrigatório.',
        'email.email' => 'Informe um email válido.',
        'email.unique' => 'Este email já está cadastrado.',
        'curso.required' => 'O curso é obrigatório.',
    ];
}
}