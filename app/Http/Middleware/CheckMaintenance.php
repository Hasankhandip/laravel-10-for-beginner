<?php
// app/Http/Middleware/CheckMaintenance.php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CheckMaintenance {
    public function handle(Request $request, Closure $next) {
        $maintenanceMode = true;

        if ($maintenanceMode) {
            return response('Site is under maintenance', 503);
        }

        return $next($request);
    }
}