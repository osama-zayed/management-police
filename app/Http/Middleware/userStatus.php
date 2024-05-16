<?php

namespace App\Http\Middleware;

use Carbon\Carbon;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class userStatus
{
    public function handle(Request $request, Closure $next): Response
    {
        
        $userstatu = auth()->user()->user_status;
        if (isset($userstatu)) {
            if ($userstatu)
                return $next($request);
        }
        auth()->logout();
        toastr()->error("حسابك موقف");
        return redirect()->back();
    }
}
