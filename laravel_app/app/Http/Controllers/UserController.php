<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        return 'Hello from UserController';
    }

    
    //public function goto(){
    //    return view ('Welcome');
    //}

    public function show($id){
        $data = array(
            "id" => $id,
            "name" => "Meriam",
            "age" => 23,
            "email" => "mbaiwes01@gmail.com"
        );
        return Controllers('UserController', ['data'=>$data]);
    }


}
