<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class cover extends Model
{
    use HasFactory;

    protected $table = 'covers';

    protected $fillable = ['cover','Cover_Name','cover_title','Ar_title','Fr_title','nav_id','box_id','relatedtopic_id'];

    public $timestamps=true;   // default  true or false
    
}
