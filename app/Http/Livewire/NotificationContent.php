<?php

namespace App\Http\Livewire;
use App\Models\NotificationView;
use App\Models\Notification;
use App\Models\Candidat;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class NotificationContent extends Component
{
    public function render()
    {
        $Users = User::all();
        $Candidats = Candidat::all();
        if (Auth::user()->can('show-rapport', '')){
            $Notifications = Notification::all()->sortByDesc("created_at")->take(4);
        }
        else {
            $Notifications = Notification::where('type', '=', 'Candidature')->get()->sortByDesc("created_at")->take(4);

        }
        
        return view('livewire.notification-content',['Users' => $Users,'Candidats' => $Candidats,'Notifications' => $Notifications]);
    }
}
