<?php

namespace App\Models;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User  as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Model;   //404 page

class member extends Authenticatable
{
   
    use Notifiable;

    protected $table = 'members';
    
    protected $fillable = ['id', 'username', 'email', 'email_verified_at', 'password', 'mobile', 'Distantion', 'country', 'prof_pic', 'cover_pic', 'facebook', 'instgram', 'olx', 'visa', 'remember_token', 'created_at', 'updated_at'];
    
    public $timestamps=true;  
  
   /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function fav_product()
    {
        return $this->hasOne('App\Models\fav_product');
    }

}
