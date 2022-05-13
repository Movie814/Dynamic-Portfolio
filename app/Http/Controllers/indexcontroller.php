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
       
       
    
        $data=['name'=>$request->name,'email'=>$request->email,'phone'=>$request->phone,'msg'=>$request->msg];
        // $user['to']='moviedownload814@gmail.com';
        Mail::send('mail',$data,function ($mes) use ($data){
            $mes-> to($data['email']);
            $mes->subject($data['name']);
            $mes->from('moviedownload814@gmail.com');
        });
        return redirect()->back();
    }
    
}
