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


        User::create([
            'email' => 'admin@admin.com',
            'name'  => 'Administrator',
            //'prenom'  => 'f',
            'password' => bcrypt('admin'),
            'avatar'  => 'img/config/nopic.png',
        ]);

        Profil::create([
            'user_id' => 1,
            'entreprise' => '',
            'tel'  => 0,
            'adresse'  => '',
            'etat' => '',
            'photo'  => ''
        ]);

    }

    private function sync()
    {

        $role = User::find(1);
        $role->roles()->sync([1]);

        $this->command->info('Users linked to roles!');
    }
}
