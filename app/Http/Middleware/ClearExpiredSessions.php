<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Session;

class ClearExpiredSessions
{
    public function handle($request, Closure $next)
    {
        // Clear expired sessions
        $this->clearExpiredSessions();

        return $next($request);
    }

    private function clearExpiredSessions()
    {
        $allSessions = session()->all();

        foreach ($allSessions as $key => $value) {
            // Check if the session key contains '_expiration'
            if (strpos($key, '_expiration') !== false) {
                // Extract the associated session key
                // $sessionKey = str_replace('_expiration', '', $key);

                // Check if the session has expired
                if (now()->isAfter(session($key))) {
                    // Session has expired, remove both the value and the expiration key
                    // session()->forget($sessionKey);
                    session()->forget($key);
                }
            }
        }
    }
}
