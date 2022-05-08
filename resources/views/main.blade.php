@extends('layouts.admin_layout')


@section('main')
<main>
    <div class="container-fluid ">
        <h1 class="mt-4">Dashboard</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
            <li class="breadcrumb-item active"> Dashboard</li>
        </ol>


        <form action="{{route('dashboardUpdate')}}" enctype="multipart/form-data" method="POST">
            @csrf
            {{method_field('PUT')}}
        <div class="row">
            <div class="form-group col-md-4 mt-3">
                <h3>Background Image</h3>
                <img style="height: 30vh" src="{{(@$main->bc_img)?url($main->bc_img):asset("/assets/img/bc_img)}}" >
                <input type="file" class="mt-3 form-control" name="bc_img" id="bc_img" >
                
            </div>
            <div class="form-group col-md-3 mt-4"> 
               <div> <label for="title"> <h6> <b>Title</b> </h6> </label>
                <input type="text" class="form-control" name="title" id="title" value="{{(@$main->title)?$main->title:"The Title"}}" required>
            </div>
               <div>
                <label for="sub_title"><h6> <b>Sub Title</b> </h6></label>
                <input type="text" class="form-control" name="sub_title" id="sub_title" value="{{(@$main->sub_title)?$main->sub_title:"Sub Title"}}" required>
               </div>
               <div>
                <label for="sub_title"><h6> <b>Upload Resume</b> </h6></label>
                <input type="file" class="form-control" name="resume" id="resume" >
               </div>
            </div>
            
        </div>
        <input type="submit" class="btn btn-primary mt-4" name="" id="">
    </div>
</form>
</main>
    
@endsection


