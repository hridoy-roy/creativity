<?php

namespace App\Http\Controllers\admin;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AccountInfoController extends Controller
{
    public function account(){
        return view('admin.account-info');
    }

    // Update Account
    public function accountUpdate(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email'
        ]);

        $user = User::findOrFail(Auth::id());
        $user->name = $request->name;
        $user->email = $request->email;
        notify()->success("Success","Account has been successfully updated");
        return redirect()->back();
    }

    // Update Password 
    public function updatePassword(Request $request)
    {
        $this->validate($request,[
            'old_password' => 'required',
            'password' => 'required|confirmed',
        ]);
        $hashedPassword = Auth::user()->password;
        if (Hash::check($request->old_password,$hashedPassword))
        {
            if (!Hash::check($request->password,$hashedPassword))
            {
                $user = User::find(Auth::id());
                $user->password = Hash::make($request->password);
                $user->save();
                notify()->success("Success","Password Successfully Changed");
                Auth::logout();
                return redirect()->back();
            } else {
                notify()->error("Error","New password cannot be the same as old password.");
                return redirect()->back();
            }
        } else {
            notify()->error("Error","Current password not match.");
            return redirect()->back();
        }

    }
}
