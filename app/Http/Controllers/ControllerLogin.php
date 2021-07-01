<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\support\Facades\DB;
use Illuminate\support\Facades\Auth;
use App\Models\users;
use Session;

class ControllerLogin extends Controller

{

    public function logout (Request $request){
        $request->session()->flush();
        return redirect('/');


    }


    public function register (Request $register){
        DB::table('users')->insert([
			'name' => $register->name,
            'level' => '2',
			'username' => $register->username,
            'no_telp' => $register->no_telp,
			'password' => bcrypt($register->password),
			'alamat' => $register->alamat,
			'email' => $register->email,	
		]);

		return view('login2');


    }

    public function login (Request $request){
        // dd($request->all());
        $username = $request->username;
        $user = DB::table('users')->where ('username',$username)->get();
        $login = $request->only ('username','password');
            if (Auth::attempt ($login)){
                foreach($user as $User){
                    if ($User -> level == '1'){
                        return redirect ('/admin');
                    
                    }
                    else {
                        return redirect ('/user');

                    }
                }
                
                }
                else {
                    return redirect ('/');    
            }
        


    }
        
    
}