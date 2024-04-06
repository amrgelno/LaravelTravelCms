<?php
namespace App\Models;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User  as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Model;   //404 page
use App\Notifications\AdminResetPasswordNotification;


// class Admin extends Model    /* use Admin Tabel */

class Admin extends Authenticatable

{

    use Notifiable;
  //  use HasFactory;

    protected $table = 'admin';

     protected $fillable = ['username','email','password','Pic','token'];

     public $timestamps=true;   // default  true or false


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

    public function adminpost()
    {
        return $this->hasOne('App\Models\AdminPosts');
    }



public function  sendPasswordResetNotification($token){


$this->notify(new AdminResetPasswordNotification($token));


}


}
