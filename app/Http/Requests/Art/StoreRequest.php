<?php

namespace App\Http\Requests\Art;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
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
            'name' => ['required','string'],
            'attributes' => ['required','string'],
            'description' => ['required','string'],
            'type' => ['required','integer'],
            'first_stage_name' => ['required','string'],
            'first_stage_description' => ['required','string'],
            'second_stage_name' => ['required','string'],
            'second_stage_description' => ['required','string'],
            'third_stage_name' => ['required','string'],
            'third_stage_description' => ['required','string'],
            'fourth_stage_name' => ['required','string'],
            'fourth_stage_description' => ['required','string'],
        ];
    }
}
