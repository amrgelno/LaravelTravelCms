<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class member_pr extends Model
{
    use HasFactory;

    protected $table = 'member_pr';
    
protected $fillable = ['ID','product_Model','product_ver','product_cat','product_cost','product_price','Discount','QR','supplier','product_Des','Image1','Image2','Image3','Image4','Box_ID','created_at', 'updated_at'];
    
    public $timestamps=true;

}
