<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TransmitterRequest extends FormRequest
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
        $transmitter = $this->route()->parameter('transmitter');

        if($transmitter)
        {
            return [
                'ruc'                   => 'required|numeric|unique:transmitters,ruc,' . $transmitter,
                'razón_social'          => 'required',
                'direccion_matriz'      => 'required',
                'ambiente'              => 'required',
                'tipo_emision'          => 'required',
                'obligado_contabilidad' => 'required',
                'contraseña_firma'      => 'confirmed',
                'servidor_correo'       => 'required',
                'correo_remitente'      => 'required|email',
                'contraseña_correo'     => '',
                'puerto'                => 'required',
                'logo'                  => 'nullable',
                'firma'                 => 'nullable',
                'estatus'               => '',
                'ruta_autorizados'      => 'required',
                'fecha_inicio_plan'     => 'required',
                'plan_id'               => 'required'
            ];
        }else{
            return [
                'ruc'                   => 'required|numeric|unique:transmitters,ruc',
                'razón_social'          => 'required',
                'direccion_matriz'      => 'required',
                'ambiente'              => 'required',
                'tipo_emision'          => 'required',
                'obligado_contabilidad' => 'required',
                'contraseña_firma'      => 'required|confirmed',
                'servidor_correo'       => 'required',
                'correo_remitente'      => 'required|email',
                'contraseña_correo'     => 'required',
                'puerto'                => 'required',
                'logo'                  => 'nullable',
                'firma'                 => 'nullable',
                'estatus'               => '',
                'ruta_autorizados'      => 'required',
                'fecha_inicio_plan'     => 'required',
                'plan_id'               => 'required'
            ];
        }
        
    }
}
