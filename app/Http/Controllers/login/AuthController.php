<?php

namespace App\Http\Controllers\login;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Database\Console\Migrations\StatusCommand;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function register(Request $req){
        // $pass = Hash::make($req->password);
        $user = User::create($req->all());
        // $user->password = $pass;
        // $user->save(); 
        return $user;
    }

    public function login(Request $req){
        $user = User::where('email',$req->email)->where('password',$req->password)->first();
        if(!$user){
            return ;
        }
        if($req->email == "admin@gmail.com" && $req->password == "321"){
            $admin = "admin";
        }else{
            $admin = "not admin";
        }
        $token = $user->createToken('authToken')->plainTextToken;
        return response([
            'user' => $user,
            'token' => $token,
            'admin' => $admin,
        ]);
    } 
}
