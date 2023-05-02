<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function index(){
        return view('login.login');
    }
public function registration(){
    return view('login.registration');
}
public function postLogin(Request $request){
$request->validate([
    'email'=>'required|email',
    'password'=>'required',
]);
$credentials = $request->only('email','password');
if(Auth::attempt($credentials)){
    return redirect()->intended('dashboard')->withSuccess('You have logged in successfully');

}

return redirect('login.login')->withSuccess('Oops... You have entered wrong credentials');
}
public function postRegistration(Request $request){
    $request->validate([
        'name'=>'required|min:3|max:12',
        'email'=>'required|email|unique:users',
        'password'=>'required|min:6',
    ]);

    $data = $request->all();
    $check = $this->create($data);

    return redirect('dashboard')->withSuccess('You have successfully logged in!');
}
public function dashboard(){
    if(Auth::check()){
        return view('login.dashboard');
    }
    return redirect('login.login')->withSuccess('You do not have access');
}
public function create(array $data){
    return User::create([
        'name'=>$data['name'],
        'email'=>$data['email'],
        'password'=>Hash::make($data['password'])
        ]);
}
public function logout(){
    Session::flush();
    Auth::logout();

    return Redirect('login.login'); 
}
}
