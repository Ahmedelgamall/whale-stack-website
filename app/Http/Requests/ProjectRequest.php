<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProjectRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return request()->isMethod('put') || request()->isMethod('patch') ? $this->onUpdate() : $this->onStore();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function onStore()
    {
        $data = [
            'project_category_id' => 'required|exists:project_categories,id',
            'image' => 'required|image|mimes:jpeg,jpg,png',
            'url' => 'required|url',
            'show_in_home' => 'nullable|in:1',
        ];
        foreach (activeLanguages() as $lang) {
            $data += [$lang->locale . '.title' => ['required']];
            $data += [$lang->locale . '.description' => ['required']];
        }


        return $data;
    }

    public function onUpdate()
    {
        $data = [
            'project_category_id' => 'required|exists:project_categories,id',
            'image' => 'sometimes|nullable|image|mimes:jpeg,jpg,png',
            'url' => 'required|url',
            'show_in_home' => 'nullable|in:1',
        ];
        foreach (activeLanguages() as $lang) {
            $data += [$lang->locale . '.title' => ['required']];
            $data += [$lang->locale . '.description' => ['required']];
        }
        return $data;
    }
}
