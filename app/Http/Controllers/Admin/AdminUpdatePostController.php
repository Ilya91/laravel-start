<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\News;
use Auth;

use Gate;

class AdminUpdatePostController extends Controller
{
    //show Form
    public function show(Request $request, $id) {

    	$news = News::find($id);
		return view('default.update_post',['title' => 'Редактирование материала','news' => $news]);
	}
	
	//new post
    public function create(Request $request) {
    	
    	$this->validate($request,[
    		'name'=>'required'
    	]);
    	
    	$user = Auth::user();
    	
    	$data = $request->except('_token');
    	
    	$article = News::find($data['id']);


        if ($request->user()->can('update', $article)) {
            $article->name = $data['name'];
            $article->img = $data['img'];
            $article->text = $data['text'];
            $res = $user->news()->save($article);
            return redirect()->back()->with('message','Материал обновлен');
        }

       /* if (Gate::allows('update', $article)) {
            $article->name = $data['name'];
            $article->img = $data['img'];
            $article->text = $data['text'];

            $res = $user->news()->save($article);

            return redirect()->back()->with('message','Материал обновлен');
        }*/
        return redirect()->back()->with('message', 'У вас нет прав');
	}
}
