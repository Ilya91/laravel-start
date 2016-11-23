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

    public function show(Request $request){
        $array = array('title'=>'Laravel Project::Contacts');
            print_r($request->all());
            return view('default.contacts', $array);
    }
}