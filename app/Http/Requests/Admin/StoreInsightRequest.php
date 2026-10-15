<?php

namespace App\Http\Requests\Admin;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Str;

class StoreInsightRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Prepare the data for validation.
     */
    protected function prepareForValidation(): void
    {
        $this->merge([
            'is_featured' => $this->boolean('is_featured'),
            'slug' => $this->filled('slug')
                ? Str::slug($this->input('slug'))
                : Str::slug($this->input('title')),
        ]);
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'title' => ['required', 'string', 'max:255'],
            'slug' => ['required', 'string', 'max:255', 'unique:insights,slug'],
            'category' => ['required', 'string', 'max:100'],
            'summary' => ['required', 'string', 'max:500'],
            'content' => ['required', 'string'],
            'read_time' => ['nullable', 'string', 'max:50'],
            'published_date' => ['required', 'date'],
            'is_featured' => ['boolean'],
        ];
    }
}
