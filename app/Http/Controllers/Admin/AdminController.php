<?php

namespace App\Http\Controllers\Admin;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use \Auth;


class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function show(){
        $user = Auth::user();

        if(!Auth::check()){
            //$user = User::find(10);

            //Auth::guard('web')->login($user);
            Auth::guard('web')->logout();
            Auth::loginUsingId(9);
            //dump($user);
            //return redirect('login');
        };

        if(Auth::viaRemember()){
            echo 'yes';
        };

        //dump(Auth::id());
        return view('home');
    }
}
