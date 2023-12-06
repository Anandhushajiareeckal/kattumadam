<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get("/","App\Http\Controllers\FrontendController@index");
Route::get("/about","App\Http\Controllers\FrontendController@about");
Route::get("/history","App\Http\Controllers\FrontendController@history");
Route::get("/poojas","App\Http\Controllers\FrontendController@poojas");
Route::get("/pooja_time","App\Http\Controllers\FrontendController@pooja_time");
Route::get("/gallery","App\Http\Controllers\FrontendController@gallery");
Route::get("/events","App\Http\Controllers\FrontendController@events");
Route::get("/event/detail/{id}","App\Http\Controllers\FrontendController@event_detail")->name('event_detail');
Route::get("/offerings","App\Http\Controllers\FrontendController@offerings");
Route::get("/festivals","App\Http\Controllers\FrontendController@festivals");
Route::get("/tt_about","App\Http\Controllers\FrontendController@tt_about");
Route::get("/tt_history","App\Http\Controllers\FrontendController@tt_history");
Route::get("/contact","App\Http\Controllers\FrontendController@contact");
Route::post("/enquirey","App\Http\Controllers\ContactController@enquirey")->name('enquirey');







Route::prefix('admin')->group(function () {
    Route::get("/dashboard","App\Http\Controllers\IndexController@dashboard")->name('dashboard');
    Route::prefix('home')->group(function () {
        Route::get("/","App\Http\Controllers\IndexController@banner_add")->name('banner_add');
        Route::post("/banner/add","App\Http\Controllers\IndexController@banner_store")->name('banner_store');
        Route::get("/banner/list","App\Http\Controllers\IndexController@banner_list")->name('banner_list');
        Route::get("/banner/{id}","App\Http\Controllers\IndexController@banner_edit")->name('banner_edit');
        Route::put("/banner/edit/{id}","App\Http\Controllers\IndexController@banner_update")->name('banner_update');
        Route::get("/banner/delete/{id}","App\Http\Controllers\IndexController@destroy")->name('banner_delete');
    });

    Route::prefix('event')->group(function () {
        Route::get("/","App\Http\Controllers\EventController@index")->name('event');
        Route::get("/view","App\Http\Controllers\EventController@view")->name('event_view');
        Route::get("/edit/{id}","App\Http\Controllers\EventController@edit")->name('event_edit');
        Route::post("/store","App\Http\Controllers\EventController@store")->name('event_store');
        Route::post("/update/{id}","App\Http\Controllers\EventController@update")->name('event_update');
        Route::get("/delete/{id}","App\Http\Controllers\EventController@destroy")->name('event_delete');
    });

    Route::prefix('history')->group(function () {
        Route::get("/","App\Http\Controllers\HistoryController@index")->name('history');
        Route::put("/edit","App\Http\Controllers\HistoryController@update")->name('history_edit');
    });

    Route::prefix('poojas')->group(function () {
        Route::get("/","App\Http\Controllers\PoojasController@index")->name('pooja');
        Route::put("/edit","App\Http\Controllers\PoojasController@update")->name('pooja_edit');
    });

    Route::prefix('poojas_time')->group(function () {
        Route::get("/","App\Http\Controllers\PoojasController@pooja_time")->name('pooja_time');
        Route::put("/edit","App\Http\Controllers\PoojasController@pooja_time_edit")->name('pooja_time_edit');
    });

    Route::prefix('gallery')->group(function () {
        Route::get("/","App\Http\Controllers\GalleryController@index")->name('gallery');
        Route::post("/store","App\Http\Controllers\GalleryController@store")->name('gallery_store');
        Route::get("/delete/{id}","App\Http\Controllers\GalleryController@delete")->name('gallery_delete');
    });

    Route::prefix('tt_about')->group(function () {
        Route::get("/","App\Http\Controllers\TTAboutController@index")->name('tt_about');
        Route::put("/edit","App\Http\Controllers\TTAboutController@update")->name('tt_about_edit');
    });

    Route::prefix('tt_history')->group(function () {
        Route::get("/","App\Http\Controllers\TTAboutController@tt_history")->name('tt_history');
        Route::put("/edit","App\Http\Controllers\TTAboutController@tt_history_edit")->name('tt_history_edit');
    });

    Route::prefix('offering')->group(function () {
        Route::get("/","App\Http\Controllers\OfferingController@index")->name('offering_list');
        Route::post("/store","App\Http\Controllers\OfferingController@store")->name('offering_store');
        Route::get("/edit/{id}","App\Http\Controllers\OfferingController@edit")->name('offering_edit');
        Route::put("/edit/{id}","App\Http\Controllers\OfferingController@update")->name('offering_update');
        Route::get("/delete/{id}","App\Http\Controllers\OfferingController@destroy")->name('offering_delete');
        Route::get("/details/{id}","App\Http\Controllers\OfferingController@offering_details")->name('offering_details');
        Route::get("/details/{id}/edit/{offer}","App\Http\Controllers\OfferingController@offering_detail_edit")->name('offering_detail_edit');
        Route::post("/details/store/{id}","App\Http\Controllers\OfferingController@offering_details_store")->name('offering_details_store');
        Route::put("/details/{id}/update/{offer}","App\Http\Controllers\OfferingController@offering_detail_update")->name('offering_detail_update');
        Route::get("/details/{id}/delete/{offer}","App\Http\Controllers\OfferingController@offering_detail_delete")->name('offering_detail_delete');
    });

    Route::prefix('contact')->group(function () {
        Route::get("/","App\Http\Controllers\ContactController@index")->name('contact');
        Route::put("/update","App\Http\Controllers\ContactController@update")->name('contact_update');
        Route::get("/enquiry","App\Http\Controllers\ContactController@enquiry_list")->name('enquiry_list');
        Route::get("/enquiry_delete{id}","App\Http\Controllers\ContactController@enquiry_delete")->name('enquiry_delete');
        Route::get("/enquiry_detail/{id}","App\Http\Controllers\ContactController@enquiry_detail")->name('enquiry_detail');
        Route::put("/update","App\Http\Controllers\ContactController@update")->name('contact_update');  
    });

    Route::prefix('logo')->group(function () {
        Route::get("/","App\Http\Controllers\SettingsController@logo");
        Route::put("/update","App\Http\Controllers\SettingsController@update")->name('logo_update');
      
    });

    Route::prefix('banner')->group(function () {
        Route::get("/","App\Http\Controllers\SettingsController@banner");
        Route::get("/edit/{id}","App\Http\Controllers\SettingsController@banner_edit")->name('com_banner_edit');
        Route::put("/update/{id}","App\Http\Controllers\SettingsController@banner_save")->name('com_banner_save');


    });

    Route::prefix('festival')->group(function () {
        Route::get("/","App\Http\Controllers\FestivalController@index")->name('festival');
        Route::put("/update","App\Http\Controllers\FestivalController@update")->name('festival_update');

    });

    Route::prefix('about')->group(function () {
        Route::get("/","App\Http\Controllers\AboutController@index")->name('tt_about');
        Route::put("/edit","App\Http\Controllers\AboutController@update")->name('about_edit');
    });
});