<?php
use App\Http\Controllers\Auth\Dashboard;
use App\Http\Controllers\nav_crud;
use App\Http\Controllers\box_crud;
use App\Http\Controllers\paragraph_crud;
use App\Http\Controllers\slider_crud;
use App\Http\Controllers\video_crud;
use App\Http\Controllers\SNumbers_crud;
use App\Http\Controllers\topic_crud;
use App\Http\Controllers\faq_crud;
use App\Http\Controllers\company_crud;
use App\Http\Controllers\cover_crud;
use App\Http\Controllers\keywords_crud;
use App\Http\Controllers\social_crud;
use App\Http\Controllers\marque_crud;
use App\Http\Controllers\accessLog_crud;
use App\Http\Controllers\Cmsstatic;
use App\Http\Controllers\Client;
use App\Http\Controllers\customize_crud;
use App\Http\Controllers\product_crud;
use App\Http\Controllers\REORDER;
use App\Http\Controllers\Admin\Auth\newtopic;
use App\Http\Controllers\Frontjobreq;
use App\Http\Controllers\Frontclientcomment;

Route::group(['middleware'=>'checkdata' ], function () {
   //dashboard middleware
Route::get('/home', [App\Http\Controllers\Auth\HomeController::class, 'index'])->name('Dashboard');  // auth library

// Route::get('/admin/Dashboard', [App\Http\Controllers\Admin\Auth\Dashboard::class, 'index'])->name('user.Dashboard');  // auth library  //middleware

Route::get('/cms', [App\Http\Controllers\newtopic::class,'index'])->name('cms');

Route::resource('Admin',Adminscontroller::class);
// Edit  content -> Layout   on dashboard
Route::resource('admin/Dashboard/nav',nav_crud::class);
Route::resource('admin/Dashboard/slider',slider_crud::class);
Route::post('/admin/Del_Bulkslider',[App\Http\Controllers\slider_crud::class,'Del_Bulk'])->name('Del_Bulkslider');
Route::resource('admin/Dashboard/paragraph',paragraph_crud::class);
Route::post('/admin/Del_Bulkparagraph',[App\Http\Controllers\paragraph_crud::class,'Del_Bulk'])->name('Del_Bulkparagraph');
Route::resource('admin/Dashboard/SNumbers',SNumbers_crud::class);
Route::post('/admin/Del_BulkSNumbers',[App\Http\Controllers\SNumbers_crud::class,'Del_Bulk'])->name('Del_BulkSNumbers');
Route::resource('admin/Dashboard/topic',topic_crud::class);

Route::post('/admin/Del_Bulkfaqs',[App\Http\Controllers\faq_crud::class,'Del_Bulk'])->name('Del_Bulkfaqs');
Route::resource('admin/Dashboard/faq',faq_crud::class);

Route::post('/admin/Del_Bulktopic',[App\Http\Controllers\topic_crud::class,'Del_Bulk'])->name('Del_Bulktopic');
Route::resource('admin/Dashboard/video',video_crud::class);
Route::resource('admin/Dashboard/cover',cover_crud::class);
Route::resource('admin/Dashboard/accessLog',accessLog_crud::class);
Route::resource('admin/Dashboard/box',box_crud::class);
Route::post('/admin/Del_Bulkbox',[App\Http\Controllers\box_crud::class,'Del_Bulk'])->name('Del_Bulkbox');
Route::resource('admin/Dashboard/social',social_crud::class);
Route::resource('admin/Dashboard/marque',marque_crud::class);
Route::resource('admin/Dashboard/product',product_crud::class);
Route::post('/admin/Del_Bulkproduct',[App\Http\Controllers\box_crud::class,'Del_Bulk'])->name('Del_Bulkproduct');
Route::post('/admin/Del_Bulkmarque',[App\Http\Controllers\marque_crud::class,'Del_Bulk'])->name('Del_Bulkmarque');
Route::resource('admin/Dashboard/keywords',keywords_crud::class);

Route::view('/form', 'Form')->name('Form'); // support (get) fx only

// Route::view('/admin/companyinfo','Admin.auth.company')->name('companyinfo');

//Route::get('/companyinfo', [App\Http\Controllers\company_crud::class,'index'])->name('companyinfo');

Route::resource('admin/Dashboard/company',company_crud::class);

Route::resource('admin/Dashboard/customize',customize_crud::class);

Route::get('/admin/Cmsstatic',[App\Http\Controllers\Cmsstatic::class,'index'])->name('Cmsstatic');

Route::get('/admin/countKw',[App\Http\Controllers\Cmsstatic::class,'countKw'])->name('countKw');

Route::get('/admin/Client_req',[App\Http\Controllers\Cmsstatic::class,'Client'])->name('Client_req');

Route::get('/admin/job_req',[App\Http\Controllers\Frontjobreq::class,'index'])->name('job_req');


Route::POST('/Filteriz',[App\Http\Controllers\filterboxoption::class,'Reteriveoption'])->name('Filteriz'); 


Route::get('/admin/client_comment',[App\Http\Controllers\Frontclientcomment::class,'index'])->name('client_comment');

Route::POST('/admin/updatecommentstatus',[App\Http\Controllers\Frontclientcomment::class,'updatecommentstatus'])->name('updatecommentstatus');

Route::get('/admin/Client_orders',[App\Http\Controllers\members_crud::class,'index'])->name('Client_orders');

Route::POST('/admin/Reorder',[App\Http\Controllers\Reorder::class,'index'])->name('Reorder');

Route::view('/admin/webview','Admin.Auth.WEBVIEW')->name('webview');

Route::view('/aboutus', 'index' ,[    //output  in   category in resources / aboutus
  'title' => 'aboutus',
   'description' => 'this about us page'
   ])->name('aboutus');

});
