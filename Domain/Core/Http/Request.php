<?php

namespace Domain\Core\Http;

use Illuminate\Foundation\Http\FormRequest;

abstract class Request extends FormRequest
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
    public function response(array $errors){
        return response()->json($errors, 422);
    }
}
