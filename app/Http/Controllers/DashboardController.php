<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $user = Auth::user();  //เชื่อมต่อกับไฟล์ User.php ใน Models

        if (!$user) {
            // หากผู้ใช้ไม่ได้ล็อกอิน
            $error_message = 'ヽ༼ ಥ_ಥ༽ﾉ Ahhhhhh...Not Authorized';
            return view('dashboard', compact('error_message'));
        }
    }

    public function serviceView()
    {
        $user = Auth::user();  //เชื่อมต่อกับไฟล์ User.php ใน Models

        if (!$user) {
            // หากผู้ใช้ไม่ได้ล็อกอิน
            $error_message = 'ヽ༼ ಥ_ಥ༽ﾉ Ahhhhhh...Not Authorized';
            return view('dashboard', compact('error_message'));
        }
    }

    public function serviceEdit()
    {
        return view('service-edit');
    }
}
