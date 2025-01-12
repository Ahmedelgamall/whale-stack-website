<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BlogRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
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
            'image' => 'required|image|mimes:jpeg,jpg,png',
        ];
        foreach (activeLanguages() as $lang) {
            $data += [$lang->locale . '.title' => ['required']];
            $data += [$lang->locale . '.description' => ['required']];
            $data += [$lang->locale . '.meta_title' => ['nullable']];
            $data += [$lang->locale . '.meta_keyword' => ['nullable']];
            $data += [$lang->locale . '.meta_description' => ['nullable']];
        }


        return $data;
    }

    public function onUpdate()
    {
        $data = [
            'image' => 'sometimes|nullable|image|mimes:jpeg,jpg,png',
        ];
        foreach (activeLanguages() as $lang) {
            $data += [$lang->locale . '.title' => ['required']];
            $data += [$lang->locale . '.description' => ['required']];
            $data += [$lang->locale . '.meta_title' => ['nullable']];
            $data += [$lang->locale . '.meta_keyword' => ['nullable']];
            $data += [$lang->locale . '.meta_description' => ['nullable']];
        }
        return $data;
    }
}
