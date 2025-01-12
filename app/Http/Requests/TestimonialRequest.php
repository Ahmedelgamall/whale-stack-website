<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TestimonialRequest extends FormRequest
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
            'rank' => 'required|numeric|max:5|min:0',
        ];
        foreach (activeLanguages() as $lang) {
            $data += [$lang->locale . '.name' => ['required']];
            $data += [$lang->locale . '.job_title' => ['required']];
            $data += [$lang->locale . '.description' => ['required']];
        }


        return $data;
    }

    public function onUpdate()
    {
        $data = [
            'image' => 'sometimes|nullable|image|mimes:jpeg,jpg,png',
            'rank' => 'required|numeric|max:5|min:0',
        ];
        foreach (activeLanguages() as $lang) {
            $data += [$lang->locale . '.name' => ['required']];
            $data += [$lang->locale . '.job_title' => ['required']];
            $data += [$lang->locale . '.description' => ['required']];
        }
        return $data;
    }
}
