@extends('layouts.admin_layout')
@section('main')
<div class="container d-flex justify-content-center align-items-center">
    <style>
        @import url("https://fonts.googleapis.com/css2?family=Poppins:weight@100;200;300;400;500;600;700;800&display=swap");


body{
 background-color:rgb(17, 15, 15);
 font-family: "Poppins", sans-serif;
 font-weight: 300;
}

.container{
 height: 100vh;
}

.card{

 width: 380px;
 border: none;
 border-radius: 15px;
 padding: 8px;
 background-color: #fff;
 position: relative;
 height: 370px;
}

.upper{

 height: 80px;

}

.upper img{

 width: 100%;
 border-top-left-radius: 10px;
 border-top-right-radius: 10px;

}

.user{
 position: relative;
}

.profile img{

 
 height: 80px;
 width: 80px;
 margin-top:2px;


}

.profile{

 position: absolute;
 top:-50px;
 left: 38%;
 height: 90px;
 width: 90px;
 border:3px solid #fff;

 border-radius: 50%;

}

.follow{

 border-radius: 15px;
 padding-left: 20px;
 padding-right: 20px;
 height: 35px;
}

.stats span{

 font-size: 29px;
 
}
.txt{
     background-color: bisque
    }
    </style>
             
    <div class="card">

     <div class="upper">

       <img src="https://scontent.fdac22-1.fna.fbcdn.net/v/t1.6435-9/174435934_908029583315807_8718167643257786474_n.jpg?_nc_cat=108&ccb=1-6&_nc_sid=e3f864&_nc_eui2=AeHg8Haeo8SsprP-S2uRBU3j4e0Eg2ZHiiHh7QSDZkeKIe0d0SwzyWBoQhswjlG6LsBRPkpq1YrXwdyw8v7h9kwa&_nc_ohc=fXt2mL4ahIwAX95SlmF&_nc_ht=scontent.fdac22-1.fna&oh=00_AT9twDDf7LJWoyInstitSOvPw9tGmaQSf3NINEFIzgd7Jw&oe=629A11BF" class="img-fluid">
       
     </div>

     <div class="user text-center">

       <div class="profile">

         <img src="https://scontent.fdac22-1.fna.fbcdn.net/v/t39.30808-1/270934884_1068895497229214_7509983351863630833_n.jpg?stp=dst-jpg_p160x160&_nc_cat=104&ccb=1-6&_nc_sid=7206a8&_nc_eui2=AeFqWuLDPfjitTEQQ2ygYYKzWmIc404_2TJaYhzjTj_ZMvU_Ay5yyFo2gE6iauzILijx4sikB6yshP0L-zViQgdc&_nc_ohc=cWmADvjbc_cAX91Js8R&_nc_ht=scontent.fdac22-1.fna&oh=00_AT_LBm-bDE2UYWWfjQFIzkS9ZdVBiCRT_NI_w61CFCzEeA&oe=627B0700 " class="rounded-circle" width="80">
         
       </div>

     </div>


     <div class="mt-5 text-center">

       <h4 class="mb-0  txt"  >MD ABDUL AWAL </h4>
       <span class=" d-block mb-2 txt">FULL STACK DEVELOPER</span>

       <button class="btn btn-primary btn-sm follow">Follow</button>


       <div class="d-flex justify-content-between align-items-center mt-4 px-4">

         <div class="stats">
           <h6 class="mb-0">Followers</h6>
           <span>8,797</span>

         </div>


         <div class="stats">
           <h6 class="mb-0">Projects</h6>
           <span>142</span>

         </div>


         <div class="stats">
           <h6 class="mb-0">Ranks</h6>
           <span>129</span>

         </div>
         
       </div>
       
     </div>
      
    </div>

  </div>
@endsection
