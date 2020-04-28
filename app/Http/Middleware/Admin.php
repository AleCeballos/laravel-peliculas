<?php

namespace App\Http\Middleware;

use Closure;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Contracts\Auth\Guard;//proporciona la informacion del usuario logueado actualmente
use Session;


class Admin
{


    protected $auth;

    public function __construct(Guard $auth){
     $this->auth = $auth;


    }


    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {


        if($this->auth->user()->role != 1 ){
            Session::flash('message-error', 'sin privilegios');
             return redirect()->to('/home-peliculas');
           }
        return $next($request);
    }
}
