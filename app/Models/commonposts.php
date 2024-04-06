<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class commonposts extends Model
{
    use HasFactory;

    protected $table = 'commonposts';

    protected $fillable = ['filter','common_posts','Page ID'];

    public $timestamps=true;   // default  true or false
    
}
