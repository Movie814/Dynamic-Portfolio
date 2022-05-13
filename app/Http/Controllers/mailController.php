<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class mailController extends Controller
{
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
