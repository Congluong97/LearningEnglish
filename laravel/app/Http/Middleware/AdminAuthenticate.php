<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Auth\Middleware\Authenticate as Middleware;
class AdminAuthenticate
{
    /**
     * Điều khiển luồng request.
     * - Nếu như đã đăng nhập admin thì tiếp tục chạy request
     * - Nếu chưa đăng nhập tài khoản admin thì sẽ bị điều hướng về trang đăng nhập admin
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
   protected function redirectTo($request)
    {
        return route('admin.showLoginForm');
    }
    public function handle($request, Closure $next, ...$guards)
    {
        $guards = ['admin'];

        // $this->authenticate($request,$guards);
        // return $next($request);
         if (!\Auth::guard('admin')->check()) {
            return redirect()->route('admin.showLoginForm');
        }
        return $next($request);
    }
}
