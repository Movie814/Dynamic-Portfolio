<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Main extends Model
{
    protected $table='mains'; 
    protected $fillable =[
        'title','sub_title','bc_img','resume'
    ];
}
