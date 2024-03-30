<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Symfony\Component\HttpKernel\Profiler\Profile;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $roleArr = [
            'Super Admin',
            'Admin',
            'Account Manager',
            'Account Holder',
            'Customer'
        ];

        /*
         * use updateOrCreate in case we run multiple DB seeds for some reason
         * */
        foreach($roleArr as $role){
            $role = Role::updateOrCreate(
                [
                    /*
                     * check if this exists
                     * */
                    'name' => $role
                ],
                [
                    /*
                     * create / udpate if not found / found
                     * */
                    'name' => $role
                ]
            );
        }
    }
}
