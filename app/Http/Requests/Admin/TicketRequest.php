<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class TicketRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return auth()->check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules()
    {
        $rules = [
            'name' => 'required|string|max:255|unique:events,name,',
            'price' => 'required|integer|max:99999',
            'quantity' => 'required|integer|max:99999',
            'max_buy' => 'required|integer|max:99999'
        ];

        return $rules;
    }
}
