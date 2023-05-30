<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Auth;
use Session;
use Cache;

class LoginController extends Controller
{
    use AuthenticatesUsers;
    //
    public function index(Request $request) {
        return view('login');
    }
    public function process(Request $request) {

        $check_username = \App\User::where('name',$request->username)->count('id');
        if($check_username > 0){
            if (Auth::attempt(['name' => $request->username,'password' => $request->password])) {
                return redirect()->action('UserController@index');
            } else {
                return redirect()
                ->back()
                ->withErrors(['รหัสผ่านไม่ถูกต้อง']);
            }
        }else{
            Cache::forget('user-is-online-'.Auth::user()->id);
            Auth::logout();
            return redirect()
            ->back()
            ->withErrors(['ไม่พบชื่อผู้ใช้']);
        }
    }
    public function logout() {
        Cache::forget('user-is-online-'.Auth::user()->id);
		Auth::logout();
        return redirect('WelcomeController@index');
    }
    

}
