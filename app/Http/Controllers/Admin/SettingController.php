<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Setting;
use App\Traits\Files;
use Illuminate\Http\Request;
use Spatie\Valuestore\Valuestore;

class SettingController extends Controller
{
    use Files;

    protected $data = [
        'page_title' => 'settings',
        'route' => 'settings',
        'create' => 'edit settings'
    ];

    public function index($section)
    {
        $this->data['section'] = $section ?? 'general';
        $this->data['sections'] = Setting::query()->select('section')->distinct()->pluck('section')->toArray();
        $this->data['settings'] = Setting::query()->where('section', $this->data['section'])->get();
        return view('admin.pages.settings.index', ['data' => $this->data]);
    }

    public function update(Request $request, $id)
    {
        $data = $request->except(['_token', '_method']);
        foreach ($data as $key => $val) {
            if (!is_array($val)) {
                if ($request->hasFile($key)) {
                    $setting = Setting::where('key', $key)->first();
                    $file = $this->upload($val, 'settings', $setting->static_value);
                    $setting->update(['static_value' => $file]);
                } else {
                    Setting::where('key', $key)->update(['static_value' => $val]);
                }
            } else {
                foreach ($val as $index => $value) {
                    Setting::query()->join('setting_translations', 'settings.id', '=', 'setting_translations.setting_id')
                        ->where('setting_translations.locale', $key)
                        ->where('settings.key', $index)
                        ->update(['setting_translations.value' => $value]);
                }
            }
        }

        $this->generateCache();
        session()->flash('success', 'data updated successfully');
        return final_response('success', '', ['redirect_url' => 'admin/settings/' . $request->section]);


    }

    public function generateCache()
    {
        $settings = Valuestore::make(config_path('settings.json'));
        Setting::query()->get()->each(function ($item) use ($settings) {
            if ($item->is_static == 1) {
                $settings->put($item->key, $item->static_value);
            } else {
                foreach (activeLanguages() as $key => $language) {
                    if ($item->is_static == 0) {
                        $settings->put($item->key . '_' . $language->locale, $item->translate($language->locale)->value);
                    }
                }
            }
        });
    }
}
