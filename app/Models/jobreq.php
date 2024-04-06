<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class jobreq extends Model
{
      use HasFactory;

      protected $table = 'jobreq';

     protected $fillable =['ID','username','email','subject','cv','comment'];

     public $timestamps=false; 
}
