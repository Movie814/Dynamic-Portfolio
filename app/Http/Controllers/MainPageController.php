<?php

namespace App\Http\Controllers;
use App\Models\Main;
use Illuminate\Http\Request;

class MainPageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function main(){
        
        $main= Main::first();
         return view('main',compact('main'));
     }

   
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $main= new Main();
        $main=Main::first();
        $main->title=$request->title;
        $main->sub_title=$request->sub_title;
        if($request->file('bc_img')){
            $img_file=$request->file('bc_img');
            $img_file->storeAs('public/img/' , 'bc_img.'.$img_file->getClientOriginalExtension());
            $main->bc_img='storage/img/bc_img.'.$img_file->getClientOriginalExtension();

        }
        if($request->file('resume')){
            $pdf_file=$request->file('resume');
            $pdf_file->storeAs('public/pdf/','resume.' .$pdf_file->getClientOriginalExtension());
            $main->resume='storage/pdf/resume.'.$pdf_file->getClientOriginalExtension();

        }
        $main->save();
        return redirect()->route('maindashboard');
    }

   
}
