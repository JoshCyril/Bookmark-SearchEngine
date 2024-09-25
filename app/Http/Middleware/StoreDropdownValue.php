<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Session;

class StoreDropdownValue
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // Check if the request contains the dropdown value
        if ($request->has('myDropdown')) {
            // Store the value in the session
            Session::put('dropdown_value', $request->input('myDropdown'));
        }

        // Proceed to the next step in the request lifecycle
        return $next($request);
    }
}
