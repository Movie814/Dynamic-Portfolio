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
    public function update(Request $request )
    {
        $main= new Main();
        $main=Main::latest();
        $main->id=1;
        $main->title=$request->title;
        $main->sub_title=$request->sub_title;
        if($request->hasfile('bc_img')){
            $img_file=$request->file('bc_img');
            $ext=$img_file->getClientOriginalExtension();
            $img_name='bc_img'.$ext;
            $img_file->move('uploads/imgs',$img_name);
            $main->bc_img='uploads/imgs.'.$img_name;

        }
        if($request->hasfile('resume')){ 
            $pdf_file=$request->file('resume');
            $pdf_file_ext=$pdf_file->getClientOriginalExtension();
            $pdf_file_name='resume'.$pdf_file_ext;
            $pdf_file->move('uploads/resume' ,$pdf_file_ext);
            $main->resume='uploads/resume.'.$pdf_file_name ;

        }
        $main->save();
        return redirect()->route('maindashboard');
    }

   
}
