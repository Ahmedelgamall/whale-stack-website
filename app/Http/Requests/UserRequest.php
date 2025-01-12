<?php

namespace App\Http\Requests;

use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rules\Password;

class UserRequest extends FormRequest
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
            'name' => ['required', 'string', 'max:50'],
            'email' => ['required', 'email', 'max:100', 'unique:users,email'],
            'password' => ['required', Password::min(8)->mixedCase()],
            'phone' => ['required', 'max:20'],
            // 'phone' => 'required|regex:/(01)[0-9]{9}/',
            // 'registeration_date' => ['required'],
            'address' => ['required', 'string', 'max:190'],
            'is_active' => ['sometimes', 'in:on'],
            'type' => ['required', 'in:customer,vendor'],
            'image' => 'sometimes|nullable|image|mimes:jpeg,jpg,png',
            'country_id' => 'required|exists:countries,id',
        ];

        return $data;
    }

    public function onUpdate()
    {
        // dd($this->user);
        $data = [
            'name' => ['required', 'string', 'max:50'],
            'email' => ['required', 'email', 'max:100', 'unique:users,email,' . $this->user],
            // 'password' => ['required', Password::min(8)->mixedCase()],
            'phone' => ['required', 'max:20'],
            // 'phone' => 'required|regex:/(01)[0-9]{9}/',
            'address' => ['required', 'string', 'max:190'],
            'is_active' => ['sometimes', 'in:on'],
            'type' => ['required', 'in:customer,vendor'],
            'image' => 'sometimes|nullable|image|mimes:jpeg,jpg,png'
        ];

        return $data;
    }
}
