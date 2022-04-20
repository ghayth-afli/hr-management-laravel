<?php

namespace App\Http\Livewire;
use App\Models\NotificationView;
use App\Models\Notification;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class NotificationSystem extends Component
{
    public function render()
    {
        return view('livewire.notification-system');
    }

    public function seen()
    {
        $Notifications = Notification::all();
        foreach($Notifications as $Notification)
        {
            if (count($Notification->notificationViews()->where('user_id', '=', Auth::user()->id)->get()) == 0) {
                $Notification->notificationViews()->create([
                    'user_id' => Auth::user()->id,
                ]);
            }
        }
    }
}
