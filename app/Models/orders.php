<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class orders extends Model
{

    use HasFactory;

    protected $table = 'orders';

    protected $fillable = ['username', 'profile_IMG', 'massage', 'sender_id', 'recevier_id', 'bg_color', 'DIR', 'Time'];

    public $timestamps=false;   // default  true or false
}
