<?php

namespace App\Http\Requests;

use App\Enums\PageType;
use App\Enums\SectionType;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class SeoSettingRequest extends FormRequest
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
            'page_id' => ['required', Rule::enum(PageType::class), Rule::unique('seo_settings', 'page_id')
                ->where('page_id', $this->input('page_id'))],
        ];
        foreach (activeLanguages() as $lang) {
            $data += [$lang->locale . '.meta_title' => ['required']];
            $data += [$lang->locale . '.meta_keyword' => ['required']];
            $data += [$lang->locale . '.meta_description' => ['required']];
        }


        return $data;
    }

    public function onUpdate()
    {
        $data = [
            'page_id' => ['required', Rule::enum(PageType::class), Rule::unique('seo_settings', 'page_id')
                ->where('page_id', $this->input('page_id'))->ignore($this->input('page_id'))],
        ];
        foreach (activeLanguages() as $lang) {
            $data += [$lang->locale . '.meta_title' => ['required']];
            $data += [$lang->locale . '.meta_keyword' => ['required']];
            $data += [$lang->locale . '.meta_description' => ['required']];
        }
        return $data;
    }
}
