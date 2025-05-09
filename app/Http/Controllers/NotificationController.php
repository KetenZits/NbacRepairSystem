<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Notification;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\ServiceUser;

class NotificationController extends Controller
{
    //
    // NotificationController.php
    public function index() {
        $notifications = Notification::latest()->get();
        $unreadCount = Notification::where('is_read', false)->count();

        return view('dashboard', compact('notifications', 'unreadCount'));
    }

    public function markAsRead($id) {
        $notification = Notification::findOrFail($id);
        $notification->is_read = true;
        $notification->save();

        return redirect()->route('dashboard');
    }

}
