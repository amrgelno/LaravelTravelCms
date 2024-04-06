<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class seo extends Model
{
    use HasFactory;

    protected $table = 'seo';
    
    protected $fillable = ['Domain_site', 'KEYWORDS', 'Breadcrumbs', 'FAQS', 'schema','Microformats','Footersitemap','inspect','contentpage'];
    
    public $timestamps=false;   // default  true or false
    
}
