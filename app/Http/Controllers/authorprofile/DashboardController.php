<?php

namespace App\Http\Controllers\authorprofile;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
        return view('authorprofile.dashboard');
    }
    public function cart(){
        return view('authorprofile.cart');
    }
    public function quotes(){
        return view('authorprofile.quotes');
    }
    public function billing(){
        return view('authorprofile.billing');
    }
}
