<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class company extends Model
{
    use HasFactory;

    protected $table = 'companies';

    protected $fillable = ['Comp_Name','Business','Address','WBDescription','Email','Tax_register','postalCode','Tele_Number','fax','country','city','path_pic'];

    public $timestamps=false;   // default  true or false
    
}
