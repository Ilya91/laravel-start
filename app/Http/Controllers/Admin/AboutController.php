<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Http\Response;

class AboutController extends Controller
{
    public function show(){
        if(view()->exists('default.about')){
            //$view = view('default.about')->withTitle('Laravel Project::About')->render();
            //return (new Response($view))->header('Content-type', 'newTpe');
            //return view('default.about', $array);
            //return response()->json(['name'=>'Mike', 'sur' => 'Kent']);
            //return response()->download('robots.txt', 'mytext.txt');
            //return response()->withHeaders(['headerOne' => 'hello']);
            return redirect()->action('Admin\ContactsController@show');
        }
        abort(404);
    }
}
