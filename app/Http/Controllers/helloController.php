<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class helloController extends Controller
{
    //
public function index(){
    return view('hello');
}

public function add(Request $request){
    $sum=$request->num1+$request->num2;
    $pdct=$request->num1*$request->num2;
    return view('sum',['result'=>$sum,'product'=>$pdct]);
}
}