<?php

namespace App\Http\Requests\API\SRequestCategory;

use App\Models\ServiceRequestCategory;
use App\Http\Requests\BaseRequest;

class CreateRequest extends BaseRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return $this->can('add-request');
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return ServiceRequestCategory::$rules;
    }
}
