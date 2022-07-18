<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateTypeIdRequest extends FormRequest
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
        //dd($typeId);
        return [
            'nombre' => 'required|unique:type_ids,nombre,' . $typeId,
        ];
    }
}
