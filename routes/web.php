<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/home', 'HomeController@index')->name('home');
//Front End Urls
Route::get('/', 'HomeController@index');
Route::get('/vision', 'HomeController@vision');
Route::get('/history', 'HomeController@history');
Route::get('/admission_procedure', 'HomeController@admission_procedure');
Route::get('/fees_structure', 'HomeController@fees_structure');
Route::get('/scholarship', 'HomeController@scholarship');
Route::get('/principal_speech', 'HomeController@principal_speech');
Route::get('/calendar', 'HomeController@calendar');
Route::get('/albums', 'HomeController@albums');
Route::get('/album/{album_id}', 'HomeController@album');
Route::get('/admission', 'Admissions@admission');
Route::get('/admission/nongrant_registration', 'Admissions@NonGrantRegistration');
Route::post('/admission/nongrant_registration', 'Admissions@saveRegistration');
Route::get('/admission/admission_form', 'Admissions@AdmissionForm');
Route::post('/admission/admission_form', 'Admissions@saveAdmission');


//Backend Urls
Route::get("/admin", function () {
    return redirect("/login");
});
Route::get('/admin/dashboard', 'Admins@dashboard')->name('home');
Route::get("/admin/change_password", 'Admins@changePassword');
Route::post("/admin/change_password", 'Admins@saveChangePassword');
Route::get("/admin/notices", 'Admins@notices');
Route::get("/admin/student_list", 'Admins@student_list');
Route::post("/admin/notices/save_notice", 'Admins@saveNotice');
Route::get("/admin/notice/delete/{id}", "Admins@deleteNotice");
Route::get("/admin/gallery", 'Admins@gallery');
Route::get("/admin/photos/{album_id}", 'Admins@photos');
Route::get("/admin/gallery/add_album", 'Admins@addAlbum');
Route::post("/admin/gallery/save_album", 'Admins@saveAlbum');
Route::get("/admin/gallery/upload_images/{id}", 'Admins@uploadImages'); //upload image from
Route::post("/admin/gallery/save_uploaded_images", 'Admins@saveUploadedImages');
Route::get("/admin/gallery/photo/delete/{id}/{image}", 'Admins@deleteImage'); //upload image from
Route::get("/admin/gallery/cover_img/{id}/{image}", 'Admins@albumCover'); //upload image from

//public download url 
Route::get('/download/notice/{id}', 'Downloader@notice');


Route::get('/mail', function () {
    return view('mail.student_registration_mail');
});

Auth::routes();
