<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class UserAuth
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
        // if(!$request->session()->get('usertype'))
        // {
            return $next($request);
        // }
        // $utype=$request->session()->get('usertype');
        // if($utype=='admin')
        // {
        //     return redirect()->route('admin.home');
        // }
        // else if($utype=='teacher')
        // {
        //     return redirect()->route('teacher.home');
        // }
        // else if($utype=='student')
        // {
        //     return redirect()->route('student.home');
        // }
    }
}
