<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ParentPageController;
use App\Http\Controllers\ChildPageController;
use App\Http\Controllers\ParentContentController;
use App\Http\Controllers\ChildContentController;
use App\Http\Controllers\SliderImageController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\Mailcontroller;




//for the fortend part
Route::get('/',[FrontendController::class,'sliderschange']);

//Route::get('/page/{id}',[FrontendController::class,'pagestodisplay']);

Route::get('/pages/{id}',[FrontendController::class,'selectPageDetailsFromTable']);

//for the gmail 
Route::get('/sendmail',[Mailcontroller::class,'index']);






Route::get('/contact', function () {

    return view('frontend1.contact');
});

Route::get('/visaservice', function () {

    return view('frontend1.visa');
});
//group middleware 
Route::middleware('auth')->get('/dashboard', function () {
    return view('dashboard.master');
})->name('dashboard');
Route::middleware(['auth'])->group(function () {
// for parent page
Route::get('/add-parentpage',[ParentPageController::class,'addParentPage'])->name('parentpage');
Route::post('/add-parentpage',[ParentPageController::class,'ParentPageStore'])->name('addparentpage.store');
Route::get('/all-parentpage',[ParentPageController::class,'Parentpages']);
Route::get('/edit-parentpage/{id}',[ParentPageController::class,'editparentpage']);
Route::post('/update-parentpage',[ParentPageController::class,'updateParentpage'])->name('parentpage.update');
Route::get('/delete-parentpage/{id}',[ParentPageController::class,'deleteParentpage']);

//for  child page
 Route::get('/add-childpage',[ChildPageController::class,'addChildPage'])->name('childpage');
 Route::Post('/add-childpage',[ChildPageController::class,'ChildPageStore'])->name('childpage.store');
 Route::get('/all-childpage',[ChildPageController::class,'Childpages']);
 Route::get('/edit-childpage/{id}',[ChildPageController::class,'editchildpage']);
 Route::post('/update-childpage',[ChildPageController::class,'updatechildpage'])->name('childpage.update');
 Route::get('/delete-childpage/{id}',[ChildPageController::class,'deletechildpage']);
 
 // parent content page
 Route::get('/add-parentcontent',[ParentContentController::class,'AddParentContent'])->name('parentcontent');
 Route::Post('/add-parentcontent',[ParentContentController::class,'ParentContentStore'])->name('parentcontent.store');
 Route::get('/all-parentcontent',[ParentContentController::class,'ParentContents']);
 Route::get('/edit-parentcontent/{id}',[ParentContentController::class,'EditParentContent']);
 Route::post('/update-parentcontent',[ParentContentController::class,'UpdateParentContent'])->name('parentcontent.update');
 Route::get('/delete-parenentcontent/{id}',[ParentContentController::class,'DeleleParentContent']);
 //ckeditor  
 Route::post('ckeditor/image_upload',[ParentContentController::class,'upload'])->name('upload');

 // child Content page
 Route::get('/add-childcontent',[ChildContentController::class,'AddChildContent'])->name('childcontent');
 Route::Post('/add-childcontent',[ChildContentController::class,'ChildContentStore'])->name('childcontent.store');
 Route::get('/all-childcontent',[ChildContentController::class,'ChildContents']);
 Route::get('/edit-childcontent/{id}',[ChildContentController::class,'EditChildContent']);
 Route::post('/update-childcontent',[ChildContentController::class,'UpdateChildContent'])->name('childcontent.update');
 Route::get('/delete-childcontent/{id}',[ChildContentController::class,'DeleleChildContent']);
 //ckditor
 Route::post('editor/image_upload',[ChildContentController::class,'upload'])->name('upload');
 //ckditor upadate

 

 //image
 Route::resource('/Sliderimage', SliderImageController::class);

});






















