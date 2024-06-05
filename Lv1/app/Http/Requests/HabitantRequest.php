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
            'cin' => ['required', 'string', 'max:8'],
            'nom' => ['required', 'string', 'max:15'],
            'email' => ['required', 'string', 'email', 'max:50', 'unique:habitants'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'ville_id' => ['required', 'exists:villes,id'],
            'photo' => ['nullable', 'image', 'max:2048'], // photo is optional 
        ];
    }
}
