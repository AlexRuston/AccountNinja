<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\User;
use App\Models\UserRole;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AssignRolesToUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        /*
         * get all the users
         * */
        $users = User::get();

        /*
         * loop them and assign them a role
         * */
        foreach($users as $user){
            /*
             * we want Alex to work as a Super Admin
             * */
            if($user->name == 'Alex Watson'){
                UserRole::create([
                    'user_id' => $user->id,
                    'role_id' => Role::byName('Super Admin')->id
                ]);
            }else{
                /*
                 * and everyone else to work as an Account Manager
                 * */
                UserRole::create([
                    'user_id' => $user->id,
                    'role_id' => Role::byName('Account Manager')->id
                ]);
            }
        }

    }
}
