<?php

namespace App\Http\Middleware;
use Illuminate\Support\Facades\App;
use Closure;

use Illuminate\Support\ServiceProvider;
use Session;
use URL;
use Route;

use Illuminate\Http\Request;

class SetAppLocale
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        $accept_language =  $request->header('accept-language');
        $lang_array =  explode(',', $accept_language);
        $locale = $lang_array[0] ??  App::getLocale();
         // $locale = $request->query( 'lang', Session::get('lang' ,$locale));
         // Session::put('lang' , $locale);

         $locale = $request->route('locale' , $locale);

         // $locales = ['en' ,'ar' ];
         // if(!in_array($locale, $locales))
         // {
         //     abort(404);
         // }
         App::setLocale($locale);

         URL::defaults([
             'locale' => $locale,
         ]);
         Route::current()->forgetParameter('locale');
         return $next($request);
     }
}
