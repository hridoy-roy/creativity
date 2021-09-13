<?php

namespace App\Http\Controllers\frontend;
use App\Models\FreeTrial;
use App\Mail\FreeTrialMail;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;

class FreeTrialController extends Controller
{
    public function freeTrailStore(Request $request){
        $this->validate($request, [
            'category' => 'required',
            'email' => 'required|string|email|max:255|email_checker',
        ]);
        $freetrial = FreeTrial::create([
            'category' => $request->category,
            'email' => $request->email
        ]);
        // Mail::to("azhar.womenindigital@gmail.com")->send(new FreeTrialMail($freetrial));
        return redirect()->away('https://clippingpatharts.wetransfer.com/');
    }
}
