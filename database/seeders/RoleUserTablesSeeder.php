<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Role;
use App\Models\Profil;

class RoleUserTablesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Cria usuários admins (dados controlados)
        $this->createAdmins();

        // Vincula usuários aos papéis
        $this->sync();    
    }

    private function createAdmins()
    {
        Profil::create([
            'entreprise' => '', 
            'tel'  => 0,
            'adresse'  => '',
            'etat' => '',
            'langue'  => '',
            'photo'  => ''
        ]);
        
        User::create([
            'profil_id' => 1,
            'email' => 'admin@admin.com', 
            'name'  => 'Administrator',
            //'prenom'  => 'f',
            'password' => bcrypt('admin'),
            'avatar'  => 'img/config/nopic.png',
            'active'  => true
        ]);

    }

    private function sync()
    {       

        $role = User::find(1);
        $role->roles()->sync([2]);        

        $this->command->info('Users linked to roles!');
    }
}
