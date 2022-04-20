<?php

namespace App\Http\Livewire;

use App\Models\NotificationView;
use App\Models\Notification;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class Bull extends Component
{
    public function render()
    {
        $Notifications = Notification::all();
        $UserNotifications = NotificationView::where('user_id', '=', Auth::user()->id)->get();
        $NotificationsNumber = count($Notifications) - count($UserNotifications);
        return view('livewire.bull',['NotificationsNumber' => $NotificationsNumber]);
    }
    
}