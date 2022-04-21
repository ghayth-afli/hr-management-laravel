<?php

namespace App\Http\Livewire;
use App\Models\NotificationView;
use App\Models\Notification;
use App\Models\Candidat;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class NotificationSystem extends Component
{
    public function render()
    {
        $Users = User::all();
        $Candidats = Candidat::all();
        $Notifications = Notification::all();
        return view('livewire.notification-system',['Users' => $Users,'Candidats' => $Candidats,'Notifications' => $Notifications]);
    }

    public function seen()
    {
        $Notifications = Notification::all();
        foreach($Notifications as $Notification)
        {
            if ($Notification->type =='Système') {
                if ($Notification->source != Auth::user()->id) {
                    if (count($Notification->notificationViews()->where('user_id', '=', Auth::user()->id)->get()) == 0) {
                        $Notification->notificationViews()->create([
                            'user_id' => Auth::user()->id,
                        ]);
                    }
                }
            }
            else {
                if (count($Notification->notificationViews()->where('user_id', '=', Auth::user()->id)->get()) == 0) {
                    $Notification->notificationViews()->create([
                        'user_id' => Auth::user()->id,
                    ]);
                }
            }
        }
    }
}
