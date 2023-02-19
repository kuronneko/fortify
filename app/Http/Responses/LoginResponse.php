<?php

namespace App\Http\Responses;

use App\Providers\RouteServiceProvider;
use Laravel\Fortify\Contracts\LoginResponse as FortifyLoginResponse;

class LoginResponse implements FortifyLoginResponse {

    public function toResponse($request)
    {
        return redirect('home');
        //dd($request->user());
        //return redirect(RouteServiceProvider::HOME."?custom-query=string");
    }
}
