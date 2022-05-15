<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class eleveAuthenticated
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
        if( Auth::check() )
        {
            /** @var User $user */
            $user = Auth::user();

            // if user is not admin take him to his dashboard
            if ($user->hasRole('admin') ) {
                return redirect(route('admin_dashboard'));
            }
            else if ($user->hasRole('resp')) {
                return redirect(route('resp_dashboard'));
            }

            // allow admin to proceed with request
            else if ( $user->hasRole('eleve'))  {
                return $next($request);
            }
        }

        abort(403); // permission denied error
    }
}
