<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class cekPetugas
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        //echo "halamann petugass";
        //die();
        $session = Auth::guard ("petugas")->user()->username;
        // var_dump($session);
        // die();
        if ($session){
            return $next ($request);
        }else{
            return redirect("/petugas/login");           
        }
        return $next($request);
    }
}
