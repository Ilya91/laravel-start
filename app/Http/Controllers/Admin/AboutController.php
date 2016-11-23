<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AboutController extends Controller
{
    public function show(){
        $array = array('title'=>'Laravel Project::About');
        if(view()->exists('default.about')){
            return view('default.about', $array);
        }
        abort(404);
    }
}
