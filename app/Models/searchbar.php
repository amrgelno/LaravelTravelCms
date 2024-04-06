<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class searchbar extends Model
{
    use HasFactory;

    protected $table = 'searchbar';
    
    protected $fillable = ['ID','TargetedKeyword','IP_Address','country','Devices','Time'];
    
    public $timestamps=false;   // default  true or false
}
