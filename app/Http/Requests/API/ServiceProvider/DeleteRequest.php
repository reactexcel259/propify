<?php

namespace App\Http\Requests\API\ServiceProvider;

use App\Models\ServiceProvider;
use App\Http\Requests\BaseRequest;

class DeleteRequest extends BaseRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        $u = $this->user();
        if ($u->can('delete-provider')) {
            return true;
        }
        return ServiceProvider::where('id', $this->route('id'))
            ->where('user_id', $u->id)->exists();
    }
}

