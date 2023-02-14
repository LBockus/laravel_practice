<?php

namespace App\Http\Requests;

use App\Rules\PersonalCode;
use Illuminate\Foundation\Http\FormRequest;

class PersonRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'personal_code' => ['required', new PersonalCode()]
        ];
    }
}
