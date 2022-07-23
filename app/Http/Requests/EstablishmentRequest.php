<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EstablishmentRequest extends FormRequest
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
            'codigo' => 'required|numeric',
            'url' => 'url',
            'nombre_comercial' => '',
            'direccion' => '',
            'correo_cco' => 'email',
            'estado' => 'required',
            'logo' => '',
            'transmitter_id' => 'required'
        ];
    }
}
