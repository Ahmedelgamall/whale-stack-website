<?php

namespace App\Http\Requests;

use App\Enums\PageType;
use App\Enums\SectionType;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StaticTextRequest extends FormRequest
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
            'image' => 'sometimes|image|mimes:jpeg,jpg,png',
            'url' => 'sometimes|url',
            'page_id' => ['required', Rule::enum(PageType::class)],
            'section' => [
                'required',
                Rule::enum(SectionType::class),
                Rule::unique('static_texts', 'section')
                    ->where('page_id', $this->input('page_id'))
            ]
            // 'page_name' => ['required', Rule::in(array_map(fn($case) => $case->value, PageType::cases()))]
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
            'image' => 'sometimes|image|mimes:jpeg,jpg,png',
            'url' => 'sometimes|url',
            'page_id' => ['required', Rule::enum(PageType::class)],
            'section' => [
                'required',
                Rule::enum(SectionType::class),
                Rule::unique('static_texts', 'section')
                    ->where('page_id', $this->input('page_id'))
                    ->ignore($this->input('section'))
            ],
            // 'page_name' => ['required', Rule::in(array_map(fn($case) => $case->value, PageType::cases()))]
        ];
        foreach (activeLanguages() as $lang) {
            $data += [$lang->locale . '.title' => ['required']];
            $data += [$lang->locale . '.description' => ['required']];
        }
        return $data;
    }
}
