<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Notification extends Controller
{
    public function index()
    { 
        return view('notification.notification');
    }

}
