<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{







 public function dash(){
    return view('dash');
}

public function about(){
    return view('about');
}

public function contact(){
    return view('contact');
}

public function portfolio(){
    return view('portfolio');
}

public function service(){
    return view('service');
}




}
