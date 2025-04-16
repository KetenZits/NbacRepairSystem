<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;
use App\Http\Middleware\AdminMiddleware;

class AdminMiddleware
{
    /**
     * จัดการคำขอที่เข้ามา
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next): Response
    {
        // ตรวจสอบว่าผู้ใช้ยังไม่ได้ login
        if (!Auth::check()) {
            // ส่ง error message เข้า view โดยตรง
            return response()->view('loginfail', [
                'error_message' => 'กรุณาเข้าสู่ระบบก่อนเข้าใช้งาน'
            ]);
        }
    
        if (!Auth::user()->is_admin) {
            return response()->view('loginfail', [
                'error_message' => 'คุณไม่มีสิทธิ์เข้าถึงหน้านี้'
            ]);
        }
    
        return $next($request);
    }
}