<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Validation\Rules;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Auth\Events\Registered;
use App\Providers\RouteServiceProvider;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        addJavascriptFile('assets/js/custom/authentication/sign-up/general.js');

        return view('pages.auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'phone' => ['required', 'string','max:15'],
            'userskill' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        if($request->has('image')){
            $image = $request->file('image');
            $extention = $image->getClientOriginalExtension();  

            $filename = time().'.'.$extention;

            $path = 'uploads/user/';
            $image->move($path, $filename);
        }

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            // 'address'=> $request->address,
            'phone'=> $request->phone,
            'phone_country_code'=> $request->phone_country_code,
            'gender'=> $request->gender,
            'user_main_skill'=> $request->userskill,
            // 'image'=> $path.$filename, 
            'password' => Hash::make($request->password),
            'last_login_at' => \Illuminate\Support\Carbon::now()->toDateTimeString(),
            'last_login_ip' => $request->getClientIp()
        ]);

        event(new Registered($user));

        // Auth::login($user);

        // return redirect(RouteServiceProvider::HOME);
        return redirect('/login');
    }
}
