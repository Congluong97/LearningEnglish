<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class CheckLogin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
<<<<<<< HEAD
        if(Auth::check()){
            $user = Auth::user();
            if($user->level == 2 || $user->level == 1 ){
                return $next($request); 
            }else{

                return redirect('login')->with('error','Tài khoản không có quyền truy cập vào trang web này');
            }
        }elseif(Auth::guest()){
            return redirect('login');
        }
=======
        // if(Auth::check()){
        //     $user = Auth::user();
        //     if($user->level == 1){
        //         return $next($request); 
        //     }else{

        //         return redirect('admin/login')->with('error','Tài khoản không có quyền truy cập vào trang web này');
        //     }
        // }elseif(Auth::guest()){
        //     return redirect('admin/login');
        // }
>>>>>>> 816b7a5731929d90c617ccca33dda393e65b0129

        
    }
}
