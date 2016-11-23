<?php

namespace App\Http\Controllers\Admin;


use Illuminate\Http\Request;

class ContactsController
{
    /*protected $request;
    public function __construct(Request $request)
    {
        $this->request = $request;
    }*/

    public function show(Request $request, $id=FALSE){
        $array = array('title'=>'Laravel Project::Contacts');

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
        return view('default.contacts', $array);
    }
}