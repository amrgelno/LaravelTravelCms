<?php

namespace App\Models;
use App\Models\marque;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class marque extends Model
{
    use HasFactory;
    
    protected $table = 'marques';

    protected $fillable = ['id','NEWS','Ar_NEWS','Fr_NEWS','nav_id'];

    public $timestamps=true;   // default  true or false
    
}
