<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
*/
Auth::routes();
Route::get('/','frontend\WebController@index')->name('index');
Route::get('faq', 'frontend\WebController@faq')->name('faq');
Route::get('photo-gallery', 'frontend\WebController@photoGallery')->name('photo.gallery');
Route::group(['namespace'=>'frontend'], function(){
/* FrontEnd Route */
Route::get('about-us', 'WebController@aboutUs')->name('about.us');
Route::get('pricing', 'WebController@pricing')->name('pricing');
Route::get('sample', 'WebController@sample')->name('sample');
Route::get('upload', 'WebController@upload')->name('upload');
Route::get('privacy-and-policy', 'WebController@privacyAndPolicy')->name('privacy.and.policy');
Route::get('terms-and-conditions', 'WebController@termsAndConditions')->name('terms.and.conditions');
Route::get('refund-policy', 'WebController@refundPolicy')->name('refund.policy');
Route::get('payment-method', 'WebController@paymentMethod')->name('payment.method');
Route::get('ecommerce-trend', 'WebController@ecommerceTrend')->name('ecommerce.trend');
Route::get('get-quote', 'GetQuoteController@getQuote')->name('get.quote');
Route::post('store-quote', 'GetQuoteController@storeQuote')->name('store.quote');
Route::get('get-quote-upload', 'WebController@getQuoteUpload')->name('get.quote.upload');
Route::get('contact', 'WebController@contactUs')->name('contact');
Route::post('contact-send', 'ContactUsController@contactSend')->name('contact.send');
Route::get('photoshop-specialish', 'WebController@photoshopSpecialist')->name('photoshop.specialist');
Route::get('photo-gallery','WebController@photoGallery')->name('photo.gallery');
Route::get('free-trial','WebController@freeTrial')->name('free.trial');
/* Services Route */
Route::get('clipping-path', 'WebController@clippingPath')->name('clipping.path');
Route::get('background-removal', 'WebController@backgrounRemoval')->name('background.removal');
Route::get('image-masking', 'WebController@imageMasking')->name('image.masking');
Route::get('natural-shadow', 'WebController@naturalShadow')->name('natural.shadow');
Route::get('photo-retouching', 'WebController@photoRetouching')->name('photo.retouching');
Route::get('ghosht-manneuquin', 'WebController@ghostManneuquin')->name('ghosht.manneuquin');
Route::get('product-photo-editing', 'WebController@productPhotEditing')->name('product.photo.editing');
Route::get('color-correction', 'WebController@colorCorrection')->name('color.correction');
Route::get('vector-conversion', 'WebController@vectorConversion')->name('vector.conversion');
/* Free Trial */
Route::post('free-trail/store','FreeTrialController@freeTrailStore')->name('free.trail.store');
/* Subscribe Route */
Route::post('subscriber','SubscriberController@subscriberStore')->name('subscriber');
});
/* Blog Route */
Route::get('blog', 'frontend\BlogController@index')->name('blog');
Route::get('blog/{slug}', 'frontend\BlogController@show');
//Admin Routes
Route::group(['as'=>'admin.','prefix' => 'admin', 'namespace'=>'admin','middleware'=>['auth','admin']], function () {
   Route::get('dashboard','AdminDashboardController@index')->name('dashboard');
   Route::get('create-blog','AdminDashboardController@createBlog')->name('create.blog');
   Route::get('freetrial','FreeTrialController@index')->name('freetrial');
   Route::get('account','AccountInfoController@account')->name('account');
   Route::put('account/update','AccountInfoController@accountUpdate')->name('account.update');
   Route::put('account/update/password', 'AccountInfoController@updatePassword')->name('update.password');
   Route::resource('contact','ContactUsController');
   Route::resource('freetrial','FreeTrialController');
   Route::resource('subscribers','SubscribersController');
   Route::resource('getquote','GetQuoteController');
   Route::resource('registeredpeople','RegisterController');
});
//Author Routes
Route::group(['as'=>'author.','prefix' => 'author', 'namespace'=>'authorprofile','middleware'=>['auth','author']], function () {
    Route::get('dashboard','DashboardController@index')->name('dashboard');
    Route::get('cart','DashboardController@cart')->name('cart');
    Route::get('quotes','DashboardController@quotes')->name('quotes');
    Route::get('billing','DashboardController@billing')->name('billing');
    Route::get('account','AuthorAccountController@account')->name('account');
    Route::put('account/update','AuthorAccountController@accountUpdate')->name('account.update');
    Route::put('account/update/password', 'AuthorAccountController@updatePassword')->name('update.password');
});



