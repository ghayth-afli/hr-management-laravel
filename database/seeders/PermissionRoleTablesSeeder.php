<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\PermissionGroup;
use App\Models\Permission;
use App\Models\Role;

class PermissionRoleTablesSeeder extends Seeder
{
	/**
     * @var Collection;
     */
    private $role;

    /**
     * @var Collection;
     */
    private $permissions;

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	// cria os papéis
    	$this->createRoles();

    	// cria os grupos de persmissões
        $this->createPermissionGroups();

        // cria as permissões
        $this->createPermissions();

        // vincula as permissões aos papéis
        $this->sync();    	    
    }

    private function createRoles()
    {

        Role::create([
            'name' => 'Administrators', 
            'label'  => 'System Administrators'
        ]); 

        $this->command->info('Roles created!');
    }

    private function createPermissionGroups()
    {
        PermissionGroup::create([
            'name' => 'Developer Settings', //1
        ]);

        PermissionGroup::create([
            'name' => 'System Settings', //2
        ]);       

        PermissionGroup::create([
            'name' => 'Users', //3
        ]); 

        PermissionGroup::create([
            'name' => 'Permissions', //4
        ]);

        PermissionGroup::create([
            'name' => 'Departement', //5
        ]); 

        PermissionGroup::create([
            'name' => 'Recrutement', //6
        ]); 

        PermissionGroup::create([
            'name' => 'Entretien', //7
        ]);

        PermissionGroup::create([
            'name' => 'Mail', //8
        ]);

        PermissionGroup::create([
            'name' => 'Rapport', //9
        ]);

        $this->command->info('Permission Groups created!');
    }

    private function createPermissions()
    {
        Permission::create([
            'permission_group_id' => '1', 
            'name' => 'root-dev', 
            'label'  => 'Developer Permission'
        ]);

    	Permission::create([
            'permission_group_id' => '2', 
            'name' => 'edit-config', 
            'label'  => 'Edit System Settings'
        ]);       
//User
        Permission::create([
            'permission_group_id' => '3', 
            'name' => 'show-user', 
            'label'  => 'Voir'
        ]); 

        Permission::create([
            'permission_group_id' => '3',
            'name' => 'create-user', 
            'label'  => 'Ajouter'
        ]);

        Permission::create([
            'permission_group_id' => '3',
            'name' => 'edit-user', 
            'label'  => 'Modifier'
        ]);

        Permission::create([
            'permission_group_id' => '3',
            'name' => 'destroy-user', 
            'label'  => 'Supprimer'
        ]); 
//Role
        Permission::create([
            'permission_group_id' => '4',
            'name' => 'show-role', 
            'label'  => 'Voir'
        ]);

        Permission::create([
            'permission_group_id' => '4',
            'name' => 'create-role', 
            'label'  => 'Ajouter'
        ]);

        Permission::create([
            'permission_group_id' => '4',
            'name' => 'edit-role', 
            'label'  => 'Modifier'
        ]);

        Permission::create([
            'permission_group_id' => '4',
            'name' => 'destroy-role', 
            'label'  => 'Supprimer'
        ]);


//Departement
        Permission::create([
            'permission_group_id' => '5',
            'name' => 'show-departement', 
            'label'  => 'Voir'
        ]);

        Permission::create([
            'permission_group_id' => '5',
            'name' => 'create-departement', 
            'label'  => 'Ajouter'
        ]);

        Permission::create([
            'permission_group_id' => '5',
            'name' => 'edit-departement', 
            'label'  => 'Modifier'
        ]);

        Permission::create([
            'permission_group_id' => '5',
            'name' => 'destroy-departement', 
            'label'  => 'Supprimer'
        ]);

//Recrutement
        Permission::create([
            'permission_group_id' => '6',
            'name' => 'show-recrutement', 
            'label'  => 'Voir'
        ]);

        Permission::create([
            'permission_group_id' => '6',
            'name' => 'create-recrutement', 
            'label'  => 'Ajouter'
        ]);

        Permission::create([
            'permission_group_id' => '6',
            'name' => 'edit-recrutement', 
            'label'  => 'Modifier'
        ]);

        Permission::create([
            'permission_group_id' => '6',
            'name' => 'destroy-recrutement', 
            'label'  => 'Supprimer'
        ]);
//Entretien
        Permission::create([
            'permission_group_id' => '7',
            'name' => 'show-entretien', 
            'label'  => 'Voir'
        ]);

        Permission::create([
            'permission_group_id' => '7',
            'name' => 'create-entretien', 
            'label'  => 'Ajouter'
        ]);

        Permission::create([
            'permission_group_id' => '7',
            'name' => 'edit-entretien', 
            'label'  => 'Modifier'
        ]);

        Permission::create([
            'permission_group_id' => '7',
            'name' => 'destroy-entretien', 
            'label'  => 'Supprimer'
        ]);
//Mail
        Permission::create([
            'permission_group_id' => '8',
            'name' => 'show-mail', 
            'label'  => 'Voir'
        ]);

        Permission::create([
            'permission_group_id' => '8',
            'name' => 'create-mail', 
            'label'  => 'Ajouter'
        ]);

        Permission::create([
            'permission_group_id' => '8',
            'name' => 'edit-mail', 
            'label'  => 'Modifier'
        ]);

        Permission::create([
            'permission_group_id' => '8',
            'name' => 'destroy-mail', 
            'label'  => 'Supprimer'
        ]);
//Rapport
        Permission::create([
            'permission_group_id' => '9',
            'name' => 'show-rapport', 
            'label'  => 'Voir'
        ]);

        Permission::create([
            'permission_group_id' => '9',
            'name' => 'create-rapport', 
            'label'  => 'Ajouter'
        ]);

        Permission::create([
            'permission_group_id' => '9',
            'name' => 'edit-rapport', 
            'label'  => 'Modifier'
        ]);

        Permission::create([
            'permission_group_id' => '9',
            'name' => 'destroy-rapport', 
            'label'  => 'Supprimer'
        ]);





        $this->command->info('Permissions created!');
    }

    private function sync()
    { 
        $permissions_id = Permission::permissionsId(1);
        $role = Role::find(1);        
        $role->permissions()->sync($permissions_id);

        /*$permissions_id = Permission::permissionsId(2);
        $role = Role::find(2);
        $role->permissions()->sync($permissions_id);*/

        $this->command->info('Persistence linked to roles!');
    }
}
