<?php

namespace App\Http\Controllers;
use App\Models\Main;
use App\Models\service;
use App\Mail\contactMail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;

class indexcontroller extends Controller
{
    public function index(){
        $main=Main::first();
        $viewdata=service::all()->take(3);
        return view('index')->with(compact('main','viewdata'));
    }
    public function sendmail(Request $request){
        $a=$request->name;
        $b=$request->email;
        $c=$request->phone;
        $d=$request->message;
        $sub="Hello Dev";
        
        $data=['name'=>"$a",'email'=>"$b",'phone'=>"$c",'message'=>"$d"];
        $user['to']='moviedownload814@gmail.com';
        Mail::send('mail',$data,function ($messages) use ($user,$sub){
            $messages->to($user['to']);
            $messages->subject($sub);
        });
        return redirect()->back();
    }
    
}
