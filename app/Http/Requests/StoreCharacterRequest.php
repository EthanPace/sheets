<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StoreCharacterRequest extends FormRequest
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
            'name'         => ['required', 'string', 'max:80'],
            'species'      => ['required', 'string', Rule::exists('species', 'name')],
            'archetype'    => ['required', 'string', Rule::exists('archetypes', 'name')],
            'background'   => ['required', 'string', Rule::exists('backgrounds', 'name')],
            'strength'     => ['required', 'integer', 'min:1', 'max:20'],
            'dexterity'    => ['required', 'integer', 'min:1', 'max:20'],
            'constitution' => ['required', 'integer', 'min:1', 'max:20'],
            'intelligence' => ['required', 'integer', 'min:1', 'max:20'],
            'wisdom'       => ['required', 'integer', 'min:1', 'max:20'],
            'charisma'     => ['required', 'integer', 'min:1', 'max:20'],
        ];
    }
}
