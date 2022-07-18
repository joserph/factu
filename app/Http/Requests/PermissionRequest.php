<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PermissionRequest extends FormRequest
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
        $permission = $this->route()->parameter('permission');
        
        if($permission)
        {
            return [
                'name' => 'required|unique:permissions,name,' . $permission->id
            ];
        }else{
            return [
                'name' => 'required|unique:permissions,name'
            ];
        }

        
    }
}
