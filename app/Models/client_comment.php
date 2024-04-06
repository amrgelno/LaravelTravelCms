<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class client_comment extends Model
{
      use HasFactory;

      protected $table = 'client_comment';

     protected $fillable =['ID','avatar','username','email','Client_POST','status'];

     public $timestamps=false; 
}
