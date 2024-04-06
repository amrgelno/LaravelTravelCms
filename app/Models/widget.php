<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class widget extends Model
{
    use HasFactory;

protected $table = 'widget';

protected $fillable =['socialMediapanel', 'share panel', 'clock', 'photo Gallery', 'chatBot', 'Map', 'contactus', 'logo', 'BrandIcon', 'SearchBar','langsection'];

public $timestamps=false; 


}
