
@extends('layouts.admin_layout')
@section('main')

  <div class="row container">
    <h1 class="mt-4">SERVICE LIST</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
        <li class="breadcrumb-item active"> SERVICE</li>
    </ol>
      <form action="{{url('/service/update/'.$crud->id)}}" enctype="multipart/form-data" method="POST">
        @csrf
      <div class="form-group col-md-3 mt-5 ">
        <div >
            <label for="#"><h5><b>Icon</b></h5></label>
            <input type="text" name="icon" value=" {{ $crud->icon}} " class=" form-control">
        </div>
        <div  class="mt-3">
            <label for="#"><h5><b>Title</b></h5></label>
            <input type="text" name="title" value="{{ $crud->title}}" class=" form-control">
        </div>
        <div  class="mt-3">
            <label for="#"><h5><b>Discription</b></h5></label>
            
                <input  type="search" class="form-control"  name="discrip"  value="{{$crud->discrip}}"  rows="4">
         

      </div>
      <input type="submit" value="Send" class="btn btn-success mt-3 ">
    </form>


  </div>
@endsection