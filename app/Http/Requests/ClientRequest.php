<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ClientRequest extends FormRequest
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
        $client = $this->route()->parameter('client');
        
        if($client)
        {
            return [
                'nombre'                => 'required|string',
                'tipo_identificacion'   => 'required',
                'identificacion'        => 'required|numeric|unique:clients,identificacion,' . $client,
                'direccion'             => 'required',
                'celular'               => 'required',
                'correo'                => 'required|email|unique:clients,correo,' . $client
            ];
        }else{
            return [
                'nombre'                => 'required|string',
                'tipo_identificacion'   => 'required',
                'identificacion'        => 'required|numeric|unique:clients,identificacion',
                'direccion'             => 'required',
                'celular'               => 'required',
                'correo'                => 'required|email|unique:clients,correo'
            ];
        }
        
    }
}
