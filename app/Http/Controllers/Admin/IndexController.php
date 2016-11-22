<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    public function show(){
        if(view()->exists('default.template')){
            $data = ['title' => 'Hello, my dear'];
            return view('default.template', $data);
        }
        abort(404);
    }
}
