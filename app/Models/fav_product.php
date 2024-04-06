<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class fav_product extends Model
{
    use HasFactory;

    protected $table = 'fav_product';
    
    protected $fillable = ['id','PROD_ID','member_id','QU','total','created_at', 'updated_at'];
    
    public $timestamps=true; 

    public function member()
    {
        return  $this->belongsTo('App\Models\member',"foreignkey",'member_id');   // userid is foreign
    }

}
