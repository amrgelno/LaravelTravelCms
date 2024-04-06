<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class box extends Model
{
    use HasFactory;

    protected $table = 'boxes';

    protected $fillable = ['Desc', 'title', 'Ar_title','Ar_Desc','Fr_title','Fr_Desc' ,'ImageName', 'cat_Name','Ar_cat_Name','Fr_cat_Name','cat_type', 'price', 'DayTime', 'Run', 'class', 'Special Offers', 'TripType', 'TripStyles', 'GroupSize', 'Duration', 'Country', 'visibility', 'nav_id', 'box_id', 'relatedtopic_id', 'BOX_STYLE'];

    public $timestamps=true;   // default  true or false
    
}
