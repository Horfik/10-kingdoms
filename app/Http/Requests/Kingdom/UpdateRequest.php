<?php

namespace App\Http\Requests\Kingdom;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'required|string',
            'capital' => 'string|nullable',
            'ruler' => 'string|nullable',
            'population' => 'string|nullable',
            'attraction' => 'string|nullable',
            'emblem' => 'string|nullable',
            'description' => 'required|string',
        ];
    }
}
