<?php

namespace App\Http\Requests\API\TenantRentContract;

use App\Models\TenantRentContract;
use InfyOm\Generator\Request\APIRequest;

class CreateRequest extends APIRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return $this->user()->can('post-tenant'); // @TODO use correct permission
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return TenantRentContract::$rules;
    }
}
