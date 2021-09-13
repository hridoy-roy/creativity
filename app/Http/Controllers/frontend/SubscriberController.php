<?php

namespace App\Http\Controllers\frontend;
use App\Models\Subscriber;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SubscriberController extends Controller
{
    public function subscriberStore(Request $request){
        $this->validate($request,[
            's_email' => 'required|string|email|max:255|unique:subscribers|email_checker',

        ]);
        $subscribe = new Subscriber();
        $subscribe->s_email = $request->s_email;
        $subscribe->save();
        notify()->success("Subscribe","Subscribe Successful");
        return redirect()->back();
    }
}
