<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FaqRequest extends FormRequest
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
        $data = [];
        foreach (activeLanguages() as $lang) {
            $data += [$lang->locale . '.question' => ['required']];
            $data += [$lang->locale . '.answer' => ['required']];
        }


        return $data;
    }

    public function onUpdate()
    {
        $data = [];
        foreach (activeLanguages() as $lang) {
            $data += [$lang->locale . '.question' => ['required']];
            $data += [$lang->locale . '.answer' => ['required']];
        }
        return $data;
    }
}
