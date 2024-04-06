<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SNumbers extends Model
{
    use HasFactory;

    protected $table = 's_numbers';

    protected $fillable = ['title','Ar_title','Fr_title','ImageName','SNumber_Name','SNumber_type','SNumber_Num','symbol','nav_id','box_id','relatedtopic_id'];

    public $timestamps=true;   // default  true or false
    
}
