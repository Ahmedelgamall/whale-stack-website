<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AdminRequest extends FormRequest
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
            'name' => 'required',
            'email' => 'required|unique:admins,email',
            'password' => 'required',
            'phone' => 'sometimes|nullable',
            'photo' => 'sometimes|nullable|image|mimes:png,jpg,jpeg,webp',

        ];
    }

    public function onUpdate()
    {
        return [
            'name' => 'required',
            'email' => 'required|unique:admins,email,' . $this->id,
            'password' => 'sometimes|nullable',
            'phone' => 'sometimes|nullable',
            'photo' => 'sometimes|nullable|image|mimes:png,jpg,jpeg,webp',
        ];
    }
}
