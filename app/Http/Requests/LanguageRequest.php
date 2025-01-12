<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LanguageRequest extends FormRequest
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
        return [
            'name' => 'required|unique:languages,name',
            'abbr' => 'required|unique:languages,abbr',
            'locale' => 'required|unique:languages,locale',
            'status' => 'sometimes|nullable'
        ];
    }

    public function onUpdate()
    {
        return [
            'name' => 'required|unique:languages,name,' . $this->id,
            'abbr' => 'required|unique:languages,abbr,' . $this->id,
            'locale' => 'required|unique:languages,locale,' . $this->id,
            'status' => 'sometimes|nullable'
        ];
    }
}
