<?php

use Carbon\Carbon;

if (!function_exists('a_url')) {
    function a_url($path)
    {
        return asset('admin/' . $path);
    }
}

if (!function_exists('active')) {
    function active($url)
    {
        if (request()->segment(1) == $url) {
            return 'active';
        } elseif (request()->segment(2) == $url) {
            return 'active';
        } elseif (request()->segment(3) == $url) {
            return 'active';
        }
    }
}
if (!function_exists('getErrorsKeys')) {
    function getErrorsKeys($errors)
    {
        $errors = collect($errors);
        $keys = $errors->keys();

        $new_errors = [];
        foreach ($keys as $key) {
            $new_errors[] = [
                'key' => $key ?? null,
                'value' => $errors[$key][0] ?? null
            ];
        }
        return collect($new_errors)->values();
    }
}

if (!function_exists('final_response')) {

    function final_response($status = null, $message = null, $data = null, $errors = [], $code = 200)
    {
        return response()->json(['status' => $status, 'message' => $message, 'data' => $data, 'errors' => $errors], $code);
    }
}
// if (!function_exists('json_response')) {

//     function final_response($code = 200, $message = null, $data = null, $errors = [], $code = 200)
//     {
//         return response()->json(['status' => $status, 'message' => $message, 'data' => $data, 'errors' => $errors], $code);
//     }
// }

if (!function_exists('activeLanguages')) {
    function activeLanguages()
    {
        $languages = \App\Models\Language::query()->where('status', 'active')->get(['name', 'locale']);
        return $languages;
    }
}

if (!function_exists('getFile')) {
    function getFile($path = null)
    {
        if ($path) {
            if (filter_var($path, FILTER_VALIDATE_URL)) {
                $file = $path;
            } else if (file_exists(public_path('storage/' . $path))) {
                $file = asset('storage/' . $path);
            } else {
                $file = asset('default.png');
            }
            return $file;
        }

        return asset('default.png');
    }
}


if (!function_exists('formatDate')) {
    function formatDate($date)
    {
        return Carbon::parse($date)->format('Y-m-d');
    }
}
if (!function_exists('getSettingOf')) {
    function getSettingOf($key)
    {
        $translate_key = $key . '_' . config('app.locale');
        $settings = \Spatie\Valuestore\Valuestore::make(config_path('settings.json'));
        return $settings->get($translate_key) ?? $settings->get($key);
    }
}
if (!function_exists('formateTitle')) {
    function formateTitle($title)
    {
        $parts = explode(' ', $title);
        $formattedTitle = collect($parts)->map(function ($word, $index) {
            if ($index === 1 || $index === 2) {
                return "<span class='risk-gd-text'>{$word}</span>";
            } elseif ($index === 3) {
                return "<span class='text-ind'>{$word}</span>";
            }
            return $word;
        })->implode(' ');

        return $formattedTitle;
    }
}
