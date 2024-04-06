<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class keywords extends Model
{
    use HasFactory;

    protected $table = 'keywords';

    protected $fillable = ['ID','Keyword','description','author','title','nav_id','box_id','relatedtopic_id'];

    public $timestamps=true;   // default  true or false
    
    
}
