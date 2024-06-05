<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class HabitantRequest extends FormRequest
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
            'cin' => 'required|numeric|max:8' ,
            'nom' => 'required|string|max:20' ,
            'email' => 'required|string|email|unique:Habitant,email' ,
            'password' => 'required|string|min:8' ,
            'ville_id' => 'required|string|exists:Ville,id' ,
            'photo' => 'nullable|image|2048' ,
        ];
    }
}
