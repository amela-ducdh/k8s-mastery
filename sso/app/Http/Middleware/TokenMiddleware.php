<?php

namespace App\Http\Middleware;

use App\Traits\Token;
use Closure;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cookie;

class TokenMiddleware
{
    use Token;
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        try {
            $token = Cookie::get('token');
            $res = $this->decodeAccessToken($token);
//            Auth::loginUsingId($res->user_id);

            return $next($request);
        } catch (\Exception $e) {
        }
    }
}
