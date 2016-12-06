<?php

namespace App\Http\Controllers\Admin;

use App\News;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\User;
use Auth;

use Gate;

class AdminPostController extends Controller
{
    //show Form
    public function show() {
		return view('default.add_post',['title' => 'Новый материал']);
	}
	
	//new post
    public function create(Request $request) {


        /*if (Gate::denies('add-post')) {
            return redirect()->back()->with('message', 'У вас нет прав');
        }*/
        $post = new News;
        /*if (Gate::denies('add', $post)) {
            return redirect()->back()->with('message', 'У вас нет прав');
        }*/

        if ($request->user()->cannot('add', $post)) {
            return redirect()->back()->with('message', 'У вас нет прав');
        }

    	$this->validate($request,[
    		'name'=>'required'
    	]);

    	$data = $request->all();

    	$res = $request->user()->news()->create([
            'name' => $data['name'],
            'img' => $data['img'],
            'text' => $data['text']
        ]);

		return redirect()->back()->with('message','Материал добавлен');

	}
}
