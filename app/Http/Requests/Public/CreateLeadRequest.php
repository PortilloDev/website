<?php

namespace App\Http\Requests\Public;

use Illuminate\Foundation\Http\FormRequest;

class CreateLeadRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'email' => 'required|email',
            'name' => 'required|string|max:255',
            'source' => 'nullable|string|max:255',
            'product_id' => 'nullable|integer|exists:products,id',
            'episode_id' => 'nullable|integer|exists:episodes,id',
            'promotion_id' => 'nullable|integer|exists:promotions,id',
            'tags' => 'nullable|string',
        ];
    }
}
