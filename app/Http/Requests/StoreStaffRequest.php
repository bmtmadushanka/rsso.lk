<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Gate;

class StoreStaffRequest extends FormRequest
{
    public function rules()
    {
        return [
            'name' => [
                'required', 'string',
            ],
            'address' => [
                'required', 'string',
            ],
            'mobile' => [
                'required', 'string',
            ],
            'home' => [
                'required', 'string',
            ],
            'email' => [
                'required', 'email',
            ],
            'profession' => [
                'required', 'string',
            ],
            'role' => [
                'required', 'string',
            ],
            'nic' => [
                'required', 'string',
            ],
            'dob' => [
                'required', 'string',
            ],
            'doj' => [
                'required', 'string',
            ],
            'photo' => [
                'required', 'file',
            ]
        ];
    }

    public function authorize()
    {
        return Gate::allows('staff_access');
    }
}