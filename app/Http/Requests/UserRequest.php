<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
{
    public function rules()
    {
        return [
            'users.name' => 'required|string|max:20',
        ];
    }
}
