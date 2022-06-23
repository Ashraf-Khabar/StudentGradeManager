<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Auth\Events\PasswordReset;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Str;
use Illuminate\Validation\Rules;
use Illuminate\Support\Facades\Auth;

class update_passwordController extends Controller
{
    /**
     * Display the password reset view.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\View\View
     */
    public function create(Request $request)
    {
        return view('auth.reset-password');
    }

    /**
     * Handle an incoming new password request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
        
        $request->validate([
            //'token' => ['required'],
            //'email' => ['required', 'email'],
            'old_password' => 'required',
            'new_password' =>'required',
            'password_confirmation' => 'required',
        ]);

        // Here we will attempt to reset the user's password. If it is successful we
        // will update the password on an actual user model and persist it to the
        // database. Otherwise we will parse the error and return the response.
        //, 'token'
        $user=Auth()->user();
        if(Hash::check($request->old_password,$user->password)&&$request->new_password==$request->password_confirmation){
            $user->update([
                'password'=>Hash::make($request->new_password),
            ]);
            return redirect()->back()->with('stat','password successfully updated');
        }
        elseif (!Hash::check($request->old_password,$user->password)){
            return redirect()->back()->with('stat','password is wrong');
        }
        else return redirect()->back()->with('stat','password not confirmed');

        

        // If the password was successfully reset, we will redirect the user back to
        // the application's home authenticated view. If there is an error we can
        // redirect them back to where they came from with their error message.
    }
}
