<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class visitors extends Model
{
 
use HasFactory;
   
protected $table = 'visitors';

protected $fillable =['IP_Address','vlink','vlinktype','time','country','Devices'];

public $timestamps=false; 
}
