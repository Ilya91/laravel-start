<?php

namespace App\Http\Controllers\Admin;


use App\Http\Controllers\Controller;
use App\Http\Requests\ContactsRequest;
use Illuminate\Http\Request;

class ContactsController extends Controller
{
    /*protected $request;
    public function __construct(Request $request)
    {
        $this->request = $request;
    }*/

    public function store(/*ContactsRequest*/ Request $request, $id = FALSE){

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



            $messages = [
                'name.required' => 'Поле имя обязательно к заполнению',
                'email.required' => 'Поле почта обязательно к заполнению',
            ];
            $validator = \Validator::make($request->all(), [
                'name' => 'required|max:10',
                'email' => 'required|email|sometimes',
                'site' => 'url'
            ], $messages);


            $validator->after(function ($validator){
                $validator->errors()->add('name', 'Дополнительное сообщение');
            });
            if($validator->fails()){
                return redirect()->route('contacts')->withErrors($validator)->exceptInput();

                //$messages = $validator->errors();
                //dump($messages->all());
            }





            //$request->flash();
            //$request->session()->put('error', 'Hi');
            //dump($request->all());
        }
        return view('default.contacts', $array);
    }

    public function show(Request $request){

        $res = $request->session()->get('key', 'default');
        dump($res);
        $array = array('title'=>'Laravel Project::Contacts');
        return view('default.contacts', $array);
    }
}