<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
$abc='';
class AuthController extends Controller
{
    
    public function index($name = null){
        global $abc;
        $data = compact('name');
        $abc = $data;
        return view("pages.auth.login")->with($data);
    }

    public function login(Request $request, $name = null){
        global $abc;
        // dd($request->all());
        $this->validate($request,[
            "email"=> "required",
            "password"=> "required",
        ]);

        if(\Auth::attempt($request->only('email','password'))){
            return redirect('dashboard');
        }
        
        return redirect('login-failed')->withError('Login details are not valid');
        // return redirect('/'.$abc)->withError('Login details are not valid');
    }

    public function register_view($name = null){
        $data = compact('name');
        return view("pages.auth.register")->with($data);
    }

    public function register(Request $request){
        $request->validate([
            'name'=>'required',
            'profile_photo_path'=> 'nullable|mimes:png,jpg,jpeg,gif',
            'email' => 'required|unique:users|email',
            'password'=>'required|confirmed'
        ]);

        // save in users table 
        if($request->has('image')){
            $image = $request->file('image');
            $extention = $image->getClientOriginalExtension();  

            $filename = time().'.'.$extention;

            $path = 'uploads/user/';
            $image->move($path, $filename);
        }

        User::create([
            'name'=>$request->name,
            'phone'=>$request->phone,
            'address'=> $request->address,
            'image'=>$path.$filename,
            'email'=>$request->email,
            'password'=> \Hash::make($request->password)
        ]);

        // login user here 
        
        if(\Auth::attempt($request->only('email','password'))){
            return redirect('dashboard');
        }

        return redirect('register')->withError('Error');
    }

    public function home(){
        return view('pages.auth.login1');
    }

    public function editprofile(){
        // $profile = User::find($id);
        // dd($profile);
        return view('edit');
    }
    public function logout(){
        \Session::flush();
        \Auth::logout();
        return redirect('/');
    }

    public function profileEdit(){
        return view('pages.dashboards.profileEdit');
    }

    public function profileDetails(){
        return view('pages.dashboards.profileDetails');
    }

    public function registerP2(){
        return view('pages.auth.register_phase2');
    }
}
