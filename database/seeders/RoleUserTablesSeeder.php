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
            'email' => 'dev@dev.com', 
            'name'  => 'Developer',
            //'prenom'  => 'k',
            'password' => bcrypt('root'),
            'avatar'  => 'img/config/nopic.png',
            'active'  => true
        ]);
        
        $this->command->info('User dev created');

        User::create([
            'profil_id' => 2,
            'email' => 'admin@admin.com', 
            'name'  => 'Administrator',
            //'prenom'  => 'f',
            'password' => bcrypt('admin'),
            'avatar'  => 'img/config/nopic.png',
            'active'  => true
        ]);

        $this->command->info('Users dev and admin created');
    }

    private function sync()
    {       
        $role = User::find(1);
        $role->roles()->sync([1]);

        $role = User::find(2);
        $role->roles()->sync([2]);        

        $this->command->info('Users linked to roles!');
    }
}
