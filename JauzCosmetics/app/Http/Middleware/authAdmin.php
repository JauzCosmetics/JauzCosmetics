<?php 
namespace App\Http\Middleware;

use Closure;

use Illuminate\Support\Facades\Auth;

class authAdmin{
    public function handle ($request, Closure $next){
        if (Auth::check()) {
            if (Auth::User()->rol == 'admin') {
                return $next($request);
            }else{
                return redirect('/login');
            }
        }else{
            return redirect('/login');
        }
    }
}