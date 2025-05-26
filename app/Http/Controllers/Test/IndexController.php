<?php

namespace App\Http\Controllers\Test;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class IndexController extends Controller
{
 public function index(){
    return view("test.index");
 }
 public function aboutus(){
    return view("test.aboutus");
}
public function contacts(){
    return view("test.contacts");
}
}
