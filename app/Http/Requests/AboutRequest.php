<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;use Illuminate\Validation\Rule;

class AboutRequest extends FormRequest
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
        return request()->isMethod('post')  ?  $this->onStore() : $this->onUpdate();
    }

    public function onStore()
    {
        $data = [
            'photo' => 'required|image|mimes:jpeg,jpg,png'
        ];
        foreach (activeLanguages() as $lang) {
            $data += [$lang->locale . '.description' => ['required']];
            $data += [$lang->locale . '.title' => ['required']];
        }


        return $data;
    }
    public function onUpdate()
    {
        $data = [
            'photo' => 'nullable|image|mimes:jpeg,jpg,png'
        ];
        foreach (activeLanguages() as $lang) {
            $data += [$lang->locale . '.description' => ['required']];
            $data += [$lang->locale . '.title' => ['required']];
        }


        return $data;
    }


}
