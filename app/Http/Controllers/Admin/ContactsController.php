<?php

namespace App\Http\Controllers\Admin;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ContactsController extends Controller
{
    /*protected $request;
    public function __construct(Request $request)
    {
        $this->request = $request;
    }*/

    public function show(Request $request, $id = FALSE){
        $array = array('title'=>'Laravel Project::Contacts');
        /*
                echo '<h1 style="margin-top: 100px">'. $request->input('name', 'Default').'</h1>';

                if ($request->has('site')){
                    print_r($request->all());
                }
                print_r($request->only('site', 'email'));
                echo '<h1 style="margin-top:100px">'.$request->text.'</h1>';
                print_r($request->path());

                if ($request->is('contacts/*')){
                    echo '<h1 style="margin-top:100px">'.$request->url().'</h1>';
                }

                if ($request->isMethod('post')){
                    $request->flashExcept('name', 'site');
                    redirect()->route('contacts');
                }*/

        if($request->isMethod('post')){
            /*$rules = [
                'name' => 'required|max:10',
                'email' => 'required|email|unique:users,email',
                'site' => 'url'
            ];
            $this->validate($request, $rules);*/

            $messages = [];
            $validator = \Validator::make($request->all(), [
                'name' => 'required|max:10',
                'email' => 'required|email|unique:users,email',
                'site' => 'url'
            ], $messages);

            if($validator->fails()){
                return redirect()->route('contacts')->withErrors($validator)->exceptInput();
            }
            //$request->flash();
            //$request->session()->put('error', 'Hi');
            //dump($request->all());
        }
        return view('default.contacts', $array);
    }
}