<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateAvtRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
        "id"=> "required",
        "formulaire_id"=> "nullable|boolean",
        "denomination"=> "nullable|boolean",
        "categorie"=> "nullable|boolean",
        "adresse_postale"=> "nullable|boolean",
        "tel"=> "nullable|boolean",
        "email"=> "nullable|boolean",
        "site_internet"=> "nullable|boolean",
        "periode_exercice"=> "nullable|boolean"
        ];
    }
}
