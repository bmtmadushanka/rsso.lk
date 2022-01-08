<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Gate;

class StoreMemberRequest extends FormRequest
{
    public function rules()
    {
        return [
            'fname' => [
                'required', 'string',
            ],
            'lname' => [
                'required', 'string',
            ],
            'address' => [
                'required', 'string',
            ],
            'email' => [
                'required', 'string',
            ],
            'mobile' => [
                'required', 'string',
            ],
            'profession' => [
                'required', 'string',
            ],
            'nic' => [
                'required', 'string',
            ],
            'age' => [
                'required', 'string',
            ],
            'photo' => [
                'required', 'string',
            ],
            'dob' => [
                'required', 'string',
            ],
            'dob' => [
                'required', 'string',
            ]
        ];
    }

   
}