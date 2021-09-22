<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite; 
use Illuminate\Support\Facades\Auth;
use App\Providers\RouteServiceProvider;
class SocialLogin extends Controller
{
    public function RedirectToGoogle(){
        return Socialite::driver('google')->redirect();
    }    
    public function GoogleCallback()
    {
        $user = Socialite::driver('google')->stateless()->user();        
        $olduser = User::where('google_id',$user->id)->first();
        if($olduser){
            Auth::login($olduser);  
            return redirect(RouteServiceProvider::HOME);          
        }else{
            $newuser=User::create([
                'name' => $user->name,
                'email' => $user->email,
                'password' => bcrypt('google'),
                'username' => $user->name,
                'google_id' => $user->id,
            ]);
            Auth::login($newuser);  
            return redirect(RouteServiceProvider::HOME);
        }
    }
}
