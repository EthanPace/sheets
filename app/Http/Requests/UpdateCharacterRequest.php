<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateCharacterRequest extends FormRequest
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
            'skills'   => ['nullable', 'array'],
            'skills.*' => ['required', 'string', Rule::exists('skills', 'name')],
            'gear'   => ['required', 'string'],
        ];
    }

    public function after(): array
    {
        return [
            function ($validator) {
                $skills = $this->input('skills', []);
                $character = $this->route('character');
                $limit = $character->archetype->num_skills;

                if (count($skills) > $limit) {
                    $validator->errors()->add('skills', "You may only choose {$limit} skill" . ($limit === 1 ? '' : 's') . ".");
                }

                foreach ($skills as $skillName) {
                    if (!$character->can_take($skillName)) {
                        $validator->errors()->add('skills', "You cannot select the skill: {$skillName}");
                    }
                }
            }
        ];
    }
}
