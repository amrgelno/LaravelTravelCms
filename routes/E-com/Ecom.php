<?php

use App\Http\Controllers\Ajex_fav;
use App\Http\Controllers\countcart;
use App\Http\Controllers\woocom;

Route::POST('/ADD_fav',[App\Http\Controllers\Ajex_fav::class,'ADD_fav'])->name('ADD_fav');

Route::POST('/Del_fav',[App\Http\Controllers\Ajex_fav::class,'Delfav'])->name('Del_fav');

Route::GET('/countcart',[App\Http\Controllers\countcart::class,'countcart'])->name('countcart');

Route::POST('/woocom',[App\Http\Controllers\woocom::class,'index'])->name('woocom');

Route::POST('/QUtoal',[App\Http\Controllers\Ajex_fav::class,'QUtoal'])->name('QUtoal');