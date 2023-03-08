<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class GameRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
            'title' => 'required|min:3',
            'producer' => 'required|max:50',
            'description' => 'required',
            'cover' => 'required|image',
        ];
    }

    public function messages(): array
    {
        return [
            'title.required' => 'You forgot to enter the game title!',
            'title.min' => 'The title must be at least 3 characters!',
            'producer.required' => 'You forgot the producer game!',
            'producer.max' => 'The producer must be of max 50 characters!',
            'cover.required' => 'You forgot the cover game!',
            'cover.image' => 'The cover must be an image!',
            'description.required' => 'You forgot the description game!',
        ];
    }
}
