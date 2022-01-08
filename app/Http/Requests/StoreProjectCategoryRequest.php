<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Gate;

class StoreProjectCategoryRequest extends FormRequest
{
    public function rules()
    {
        return [
            'name' => [
                'required', 'string',
            ],
            'description' => [
                'required', 'string',
            ]
        ];
    }

    public function authorize()
    {
        return Gate::allows('project_categories_access');
    }
}