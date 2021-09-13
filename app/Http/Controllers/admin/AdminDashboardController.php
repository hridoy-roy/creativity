<?php

namespace App\Http\Controllers\admin;

use Wink\WinkPost;
use App\Models\User;
use App\Models\GetQuote;
use App\Models\ContactUs;
use App\Models\FreeTrial;
use App\Models\Subscriber;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminDashboardController extends Controller
{
    public function index(){
        $data = [];
        $data['freetrial'] = FreeTrial::all()->count();
        $data['contact'] = ContactUs::all()->count();
        $data['subscribers'] = Subscriber::all()->count();
        $data['register'] = User::where('role_id', 2)->count();
        $data['get_quote'] = GetQuote::all()->count();
        $data['blogs'] = WinkPost::all()->count();
        return \view('admin.index', $data);
    }

    public function createBlog(){
        return view('admin.blog.create-blog');
    }


}
