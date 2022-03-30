<?php

namespace App\Http\Middleware;

use Closure;
use Auth;
use App\Models\Roles;
use Lang;
class viewUser
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $user = Auth::user();

        $success = Lang::get('general.fe');
        $message = Lang::get('general.no_permission');

        $userTypeId = Auth::user()->usertype_id;
        $roles = Roles::where('usertypeId', $userTypeId)->first();
        if($roles->view_users == 1)
        {
            return $next($request);
        }
        return redirect()->back()->with($success, $message);
    }
}
