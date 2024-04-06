<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdminPosts extends Model
{
    use HasFactory;

     protected $table = 'adminposts';

     protected $fillable = ['Posts','admin_id'];

     public $timestamps=true;   // default  true or false

// active method   by  the Way

public function member()
{
    return  $this->belongsTo('App\Models\Admin',"foreignkey",'member_id');   // userid is foreign
}




}
