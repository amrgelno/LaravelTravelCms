
<?php

//use App\Mail\HelloMail;
use App\Mail\RegMail;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Mail;


//Route::get('/sendemail', function () {   //mail
  //mail::to('')->send(new HelloMail());
  //});

  //Route::get('/sendemail',[App\Mail\HelloMail::class,'build'])->name('sendmail');


  Route::get('admin/AcivteLog_in', function () {   //mail
    mail::to('')->send(new RegMail());
    })->name('Admin.Login');




?>