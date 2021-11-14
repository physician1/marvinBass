<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class CheckoutRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules(): array
    {
        return [
            'plan_id' => ['required',
                Rule::exists('plans', 'id')
                    ->whereNull('deleted_at')
            ]
        ];
    }

    public function messages(): array
    {
        return [
            'plan_id.required' => 'Please select a plan before proceeding',
            'plan_id.exists' => 'The selected plan does not exists'
        ];
    }
}
