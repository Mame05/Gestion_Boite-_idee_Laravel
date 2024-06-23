<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreIdeeRequest extends FormRequest
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
            'libelle_idee' => 'required|string|max:255',
            'description' => 'required|string',
            'date_creation' => 'nullable|date',
            'status' => 'in:Approuvee,Refusee',
            'categorie_id' => 'required|exists:categories,id',
        ];
    }
}
