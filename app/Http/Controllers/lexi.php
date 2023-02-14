<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class lexi extends Controller
{
    public function index(){
    return 'Hello from users';
}

public function show($id){
    $data=array(
    "id"=>$id,
    "name"=>"Eric John Agapen",
    "age"=>20,
    "email"=>"agapeneric@gmail.com"
     );
     return view('user', $data);
}

}
