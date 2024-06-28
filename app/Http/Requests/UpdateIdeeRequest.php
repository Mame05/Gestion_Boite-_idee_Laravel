<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateIdeeRequest extends FormRequest
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
            'prenom_auteur' => 'required|string|max:255',
            'nom_auteur' => 'required|string|max:255',
            'libelle_idee' => 'required|string|max:255',
            'email' => 'required|string|max:255',
            'libelle_idee' => 'required|string|max:255',
            'description' => 'required|string',
            'status' => 'in:Approuvee,Refusee',
            'categorie_id' => 'required|exists:categories,id',
        ];
    }
}
