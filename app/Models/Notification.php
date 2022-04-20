<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\NotificationView;

class Notification extends Model
{
    use HasFactory;

    protected $fillable = [
        'content', 
        'type'
    ];

    public function notificationViews()
    {
        return $this->HasMany(NotificationView::class);
    }
}
