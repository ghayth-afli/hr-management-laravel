<?php

namespace App\Http\Livewire;
use App\Models\NotificationView;
use App\Models\Notification;
use App\Models\Candidat;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
class ShowNotifications extends Component
{
    public function render()
    {
        
        $Users = User::all();
        $Candidats = Candidat::all();
        if (Auth::user()->can('show-rapport', '')){
            $Notifications = Notification::all()->sortByDesc("created_at");
        }
        else {
            $Notifications = Notification::where('type', '=', 'Candidature')->get()->sortByDesc("created_at");

        }
        return view('livewire.show-notifications',['Users' => $Users,'Candidats' => $Candidats,'Notifications' => $Notifications]);
    }
    
}
