<?php

namespace App\Http\Controllers;

use App\Mail\contactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class contactController extends Controller
{
    public function store(){
      
       $contact_form_data=request()->all();
       Mail::to('moviedownload814@gmail.com')->send(new contactMail($contact_form_data));
      return redirect()->back();
    }
}
