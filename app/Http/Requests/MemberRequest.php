<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MemberRequest extends FormRequest
{
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
            'is_ceo' => 'nullable|in:1',
        ];
        foreach (activeLanguages() as $lang) {
            $data += [$lang->locale . '.name' => ['required']];
            $data += [$lang->locale . '.job_title' => ['required']];
            $data += [$lang->locale . '.message' => ['required']];
        }


        return $data;
    }

    public function onUpdate()
    {
        $data = [
            'image' => 'sometimes|nullable|image|mimes:jpeg,jpg,png',
            'is_ceo' => 'nullable|in:1',
        ];
        foreach (activeLanguages() as $lang) {
            $data += [$lang->locale . '.name' => ['required']];
            $data += [$lang->locale . '.job_title' => ['required']];
            $data += [$lang->locale . '.message' => ['required']];
        }
        return $data;
    }
}
