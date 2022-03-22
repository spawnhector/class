<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Session;


class UserLocale
{
    /**
     * Handle an incoming request.
     *
     * @param \Illuminate\Http\Request $request
     * @param \Closure $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $locale = 'EN';

        if (auth()->check()) {
            $user = auth()->user();
            $locale = !empty($user->language) ? $user->language : 'EN';
        } else {
            $checkCookie = Cookie::get('user_locale');

            if (!empty($checkCookie)) {
                $locale = $checkCookie;
            }
        }

        $generalSettings = getGeneralSettings();
        // dd($generalSettings);
        $userLanguages = $generalSettings['user_languages'];

        if (!in_array($locale, $userLanguages)) {
            $locale = 'EN';
        }

        Session::put('locale', mb_strtolower($locale));

        return $next($request);
    }
}
