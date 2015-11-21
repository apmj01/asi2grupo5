<?php

namespace Alcaldia\Http\Requests;

use Alcaldia\Http\Requests\Request;

class UsuarioCreateRequest extends Request
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
            'nombre' => 'required',
    'apellido' => 'required',
    'usuario' => 'required',
    'clave' => 'required',
    'email'=> 'required',
    'estado' => 'required',
        ];
    }
}
