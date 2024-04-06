<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class view extends Model
{
    
use HasFactory;

protected $table = 'view';

protected $fillable = ['Fontstyle', 'Fontsize', 'ulcolor', 'Fontcolor', 'FontType', 'width', 'height', 'sub1color','sub2color','font_id','Footercolor','FooterFcolor','bgcolor','bg_Image','headline','H1_Color','H2_Color','H3_Color','H4_Color','H5_Color','Link_Hover','container','lang','BusinessModel'];

public $timestamps=false;

}
