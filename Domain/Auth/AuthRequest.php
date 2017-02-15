<?php

namespace Domain\Auth;

use App\Http\Requests\Request;

use Domain\Core\Http\Request as BaseRequest;

class AuthRequest extends BaseRequest
{

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            //
        ];
    }
}
