<?php

namespace  Longtt\User\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Log;
use Longtt\User\Helper;

class SaveLogRequestAPI
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $guard
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        return $next($request);
    }

    public function terminate($request, $response)
    {
        Helper::saveLogApi('--------------------------| request |----------------------------');
        Helper::saveLogApi(Route::getFacadeRoot()->current()->uri());
        Helper::saveLogApi($request->all());
        Helper::saveLogApi('---- end request -----');
        Helper::saveLogApi('---- response -----');
        Helper::saveLogApi($response->getContent());
        Helper::saveLogApi('---- end response -----');
    }

}
