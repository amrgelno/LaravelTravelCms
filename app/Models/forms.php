<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class forms extends Model
{

    use HasFactory;

    protected $table = 'navs';
    
    protected $fillable = ['sub1menu','submenuico','SUBMENUID','parent_id','footer'];
    
    public $timestamps=true;   // default  true or false
    

}
