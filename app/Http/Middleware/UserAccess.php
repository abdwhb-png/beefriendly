<?php

namespace App\Http\Middleware;

use App\Providers\UserRolesServiceProvider;
use Closure;
use Illuminate\Http\Request;

class UserAccess
{
    protected $userRoles = UserRolesServiceProvider::ROLES;
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {

        if(in_array(auth()->user()->type, $this->userRoles)){
            return $next($request);
        }
          
        return response()->json(['You do not have permission to access for this page.']);
        /* return response()->view('errors.check-permission'); */
    }
}
