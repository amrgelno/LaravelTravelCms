<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class slider extends Model
{
    use HasFactory;

    protected $table = 'sliders';

    protected $fillable = ['title','description','ImageName','slide style','nav_id','box_id','relatedtopic_id'];

    public $timestamps=true;   // default  true or false
    

    
}
