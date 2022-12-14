<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UsuarioRequest extends FormRequest
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

       /*  $emailUnico = 'unique:App\Models\User,email';

        if ($this->isMethod('PUT') || $this->isMethod('PATCH')) {
            $emailUnico = $emailUnico . ',' . $this->route('usuario')->id;
        }
 */
        return [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
          /*   'password' => ['required', 'string', 'min:6', 'confirmed'], */
        ];
    }

    public function message()
    {
        return [
        'name.required' => 'Nome Obrigatório',
        'email.required' => 'Email Obrigatório',
        ];
    }
}
