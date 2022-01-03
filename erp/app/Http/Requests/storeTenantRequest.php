<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class storeTenantRequest extends FormRequest
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
            'user_id'   => 'unique:tenants,user_id',
            'name'      => 'string|max:125',
            'cnpj'      => 'string|min:3|max:18|unique:tenants,cnpj'
        ];
    }
}
