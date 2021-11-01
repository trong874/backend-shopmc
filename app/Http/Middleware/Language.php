<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class Language
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        $language = Session::get('locale', config('app.locale'));
        // Lấy dữ liệu lưu trong Session, không có thì trả về default lấy trong config
        config(['app.locale' => $language]);
        // Chuyển ứng dụng sang ngôn ngữ được chọn
        return $next($request);
    }
}
