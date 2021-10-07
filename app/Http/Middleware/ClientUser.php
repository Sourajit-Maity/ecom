<?php

namespace App\Http\Middleware;

use Closure;
use Auth;
use Illuminate\Http\Request;

class ClientUser
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if(Auth::user()->toArray()['role_name']=='CLIENT') {
            return $next($request); 
        } else {
            Auth::logout();
            session()->flash('error', 'You are not Authenticate.');
            return redirect('welcome.login');
        } 
    }
}
