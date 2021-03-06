<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TypeIdRequest extends FormRequest
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
        $typeId = $this->route()->parameter('identificacione');
        
        if($typeId)
        {
            return [
                'nombre' => 'required|unique:type_ids,nombre,' . $typeId,
            ];
        }else{
            return [
                'nombre' => 'required|unique:type_ids,nombre'
            ];
        }
        
    }
}
