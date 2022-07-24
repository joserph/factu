<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EmissionPointRequest extends FormRequest
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
            'secuencial_factura' => 'required|numeric',
            'secuencial_liquidacion_compra' => 'required|numeric',
            'secuencial_nota_credito' => 'required|numeric',
            'secuencial_nota_debito' => 'required|numeric',
            'secuencial_guia' => 'required|numeric',
            'secuencial_retencion' => 'required|numeric',
            'estatus' => '',
            'establishment_id' => 'required',
        ];
    }
}
