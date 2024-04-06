<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\userscontroller;   //use class
use App\Http\Controllers\Adminscontroller;   //use class
use App\Http\Controllers\Adminfx;   //use class
use App\Http\Controllers\Sum;    //use class
use App\Http\Controllers\selectAdmin;   //use class
use App\Http\Controllers\selectallAdmin;   //use class
use App\Http\Controllers\updateAdmin;     //use class
use App\Http\Controllers\DeleteAdmin;     //use class
use App\Http\Controllers\reg;   //use class
use App\Http\Controllers\Ajax;
use App\Http\Controllers\layoutfx;
use App\Http\Controllers\Apiindex;
use App\Http\Controllers\jasonlayoutfx;
use App\Http\Controllers\welcome;
use App\Http\Controllers\webmap;
use App\Http\Controllers\QuikEditstyle;
// use App\Http\Controllers\fx;
use App\Http\Controllers\CustomAuthController;
use App\Http\Controllers\Frontclientreq;
use App\Http\Controllers\Frontclientcomment;
use App\Http\Controllers\Frontjobreq;
use App\Http\Controllers\Findtour;
use App\Http\Controllers\TravelPackages;




/* SINGLE PAGE APPS BY Mvc Design pattern  (laravel)
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
// request system

//  Route::view('/admin/Log','auth.login');

  // Route::get('/laravel', function () {   //tester
     // return view('welcome');   });

// Route::get('/wel',[App\Http\Controllers\welcome::class,'welcome']); //tester

Route::get('/vue', function () {   //tester
  return view('laravelvue');
});




Route::get('/TravelPackages',[App\Http\Controllers\layoutfx::class,'index'])->name('TravelPackages');


Route::get('/getAdmins',[App\Http\Controllers\Adminfx::class,'getallAdmins'])->name('getAdmins');


Route::POST('/Findtours',[App\Http\Controllers\Findtour::class,'Reterivetours'])->name('Findtours'); 


Route::get('/sitmap',[App\Http\Controllers\webmap::class,'site']); 

 
Route::get('/Apiindex', [App\Http\Controllers\Apiindex::class,'index'])->name('Apiindex'); 

 
Route::get('/jasonlayoutfx', [App\Http\Controllers\jasonlayoutfx::class,'index'])->name('jasonlayoutfx');     // INDEX.BLADE   laravelvue


Route::get('/', [App\Http\Controllers\layoutfx::class,'index'])->name('index');     // INDEX.BLADE

Route::get('/FrontCDN', [App\Http\Controllers\Frontpagefx::class,'index'])->name('Frontpage');     // Frontpage.BLADE

Route::get('QuikEditstyle',[App\Http\Controllers\QuikEditstyle::class,'updateview'])->name('QuikEditstyle');


Route::POST('Frontclient_req',[App\Http\Controllers\Frontclientreq::class,'client_req'])->name('Frontclient_req');
Route::POST('Frontclient_comment',[App\Http\Controllers\Frontclientcomment::class,'client_req'])->name('Frontclient_comment');
Route::POST('Frontjob_req',[App\Http\Controllers\Frontjobreq::class,'client_req'])->name('Frontjob_req');


Route::resource('searchbar',searchbar::class);



 // Route::resource('admins',Adminscontroller::class)->only(['index','destory']);

 // Route::resource('admins',Adminscontroller::class)->except(['index']);

   // Route::resource('admins',Adminscontroller::class);

//  Route::get('users/{id}', [UserController::class, 'index'])->name('user.index');

//Auth::routes(['register'=>false]);
Auth::routes();
//multi-auth for  Models  register  &  login  &  Dashboard
//Dashboard


//Route::post('/AjaxAdmin',[Ajax::class,'Ajax'])->name('AjaxAdmin');

Route::view('/nav', 'link' ,[    //output  in   category in resources / aboutus
  'title' => 'website_name',
   'description' => 'description_info'
   ])->name('u.dashboard');





