<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class video extends Model
{
    use HasFactory;

    protected $table = 'videos';

protected $fillable = ['title','Ar_title','Fr_title','VIDOName','cat_Name','cat_type','price','nav_id','box_id', 'relatedtopic_id'];

public $timestamps=true;   // default  true or false

}
