<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\Role;
use App\Models\Permission;
use App\Models\Profil;
use App\Models\Departement;
use App\Models\Recrutement;
use App\Models\Etat_Candidat;
use App\Models\Rapport;
use App\Models\Entretien;
use App\Models\NotificationView;
use App\Models\Message;
use Cache;

class User extends Authenticatable
{
    use HasFactory, Notifiable;


    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','profil_id','etatPassword'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function roles()
    {
        return $this->belongsToMany(Role::class);
    }


    public function hasPermission(Permission $permission)
    {
        return $this->hasAnyRoles($permission->roles);
    }
    
    public function hasAnyRoles($roles)
    {
        if(is_array($roles) || is_object($roles) ) {
            return !! $roles->intersect($this->roles)->count();
        }
        
        return $this->roles->contains('name', $roles);
    }

    public function isOnline()
    {
        return Cache::has('user-is-online-' . $this->id);
    }

    public function profil()
    {
        return $this->hasOne(Profil::class);
    }
    public function departements()
    {
        return $this->hasMany(Departement::class);
    }
    public function recrutements()
    {
        return $this->hasMany(Recrutement::class);
    }

    public function etat_candidats()
    {
        return $this->hasMany(Etat_Candidat::class);
    }

    public function rapports()
    {
        return $this->hasMany(Rapport::class);
    }

    public function entretiens()
    {
        return $this->hasMany(Entretien::class);
    }

    public function notificationViews()
    {
        return $this->HasMany(NotificationView::class);
    }

    public function messages(){
        return $this->hasMany(Message::class);
    }
}