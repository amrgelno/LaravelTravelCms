<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class paragraph extends Model
{
   

    use HasFactory;

    protected $table = 'paragraphs';
    
    protected $fillable = ['id','Paragraph','Ar_paragraph','Fr_paragraph','nav_id','box_id','relatedtopic_id'];
    
    public $timestamps=true;   // default  true or false
    
    
}
