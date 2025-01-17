<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProjectCategoryRequest extends FormRequest
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

    public function onStore()
    {
        $data = [
            // 'photo' => 'required|image|mimes:jpeg,jpg,png'
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
            // 'photo' => 'sometimes|nullable|image|mimes:jpeg,jpg,png'
        ];
        foreach (activeLanguages() as $lang) {
            $data += [$lang->locale . '.title' => ['required']];
            $data += [$lang->locale . '.description' => ['required']];
        }
        return $data;
    }
}
