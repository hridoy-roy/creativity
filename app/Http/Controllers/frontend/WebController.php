<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class WebController extends Controller
{
    public function index(){
        return view('frontend.index');
    }
    public function aboutUs(){
        return view('frontend.about_us');
    }
    public function contactUs(){
        return view('frontend.contact');
    }
    public function backgrounRemoval(){
        return view('frontend.background_removal');
    }
    public function blogCategory(){
        return view('frontend.blog_category');
    }
    public function pricing(){
        return view('frontend.pricing');
    }
    public function sample(){
        return view('frontend.sample');
    }
    public function service(){
        return view('frontend.service');
    }
    public function clippingPath(){
        return view('frontend.clipping_path');
    }
    public function imageMasking(){
        return view('frontend.image_masking');
    }
    public function naturalShadow(){
        return view('frontend.natural_shadow');
    }
    public function photoRetouching(){
        return view('frontend.photo_retouching');
    }
    public function ghostManneuquin(){
        return view('frontend.ghosht_manneuquin');
    }
    public function upload(){
        return view('frontend.upload');
    }
    public function productPhotEditing(){
        return view('frontend.product_photo_editing');
    }
    public function colorCorrection(){
        return view('frontend.color_correction');
    }
    public function vectorConversion(){
        return view('frontend.vector_conversion');
    }
    public function blog(){
        return view('frontend.blog');
    }
    public function faq(){
        return view('frontend.faq');
    }
    public function privacyAndPolicy(){
        return view('frontend.privacy_and_policy');
    }
    public function termsAndConditions(){
        return view('frontend.terms_and_conditions');
    }
    public function refundPolicy(){
        return view('frontend.refund_policy');
    }
    public function paymentMethod(){
        return view('frontend.payment_method');
    }
    public function siteMap(){
        return view('frontend.sitemap');
    }
    public function getQuoteUpload(){
        return view('frontend.get_quote_upload');
    }
    public function ecommerceTrend(){
        return view('frontend.ecommerce_trend');
    }
    public function logIn(){
        return view('frontend.login');
    }
    public function createAccount(){
        return view('frontend.create_account');
    }
    public function photoshopSpecialist(){
        return view('frontend.photoshop_specialist');
    }
    public function photoGallery(){
        return view('frontend.photo-gallery');
    }
    public function freeTrial(){
        return view('frontend.freetrial');
    }

}
