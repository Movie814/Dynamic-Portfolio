<?php

namespace App\Http\Controllers;
use App\Models\service;
use Illuminate\Http\Request;

class servicePageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        return view('serviceCreate');
    }
    public function indexlist(){
        $dataList=service::all();
        return view('serviceList',compact('dataList'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $service= new service;
       $service->icon=$request->icon;
       $service->title=$request->title;
       $service->discrip=$request->discrip;
       $service->save();
       return redirect()->route('serviceCreate');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id=null)
    {
        $crud=service::find($id);

        return view('service_list_update',compact('crud'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $service= service::find($id);
        $service->icon=$request->icon;
        $service->title=$request->title;
        $service->discrip=$request->discrip;
        $service->save();
        return redirect()->route('serviceCreate.list');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $service=service::find($id);
        $service->delete();
        return redirect()->route('serviceCreate.list');
    }
}
