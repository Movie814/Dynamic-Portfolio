<?php

namespace App\Http\Controllers;
use App\Models\Main;
use App\Models\service;

use Illuminate\Http\Request;

class indexcontroller extends Controller
{
    public function index(){
        $main=Main::first();
        $viewdata=service::all()->take(3);
        return view('index')->with(compact('main','viewdata'));
    }
}
