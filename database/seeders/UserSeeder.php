<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $seedUsers = [
            [
                'name' => 'Super Adminr',
                'email' => "super@example.com",
                'password' => 'Password1',
                'roles' => ['admin', 'member', 'staff'],
            ],
            [
                'name' => 'Admi Ni-Strator',
                'email' => "admin@example.com",
                'password' => 'Password1!',
                'roles' => ['admin', 'member', 'staff'],
            ],

            [
                'name' => "Jacques d'Carre",
                'email' => "jacques@example.com",
                'password' => 'Password1',
                'roles' => ['member'],
            ],
            [
                'name' => 'Dee Leet',
                'email' => "dee@example.com",
                'password' => 'Password1',
                'roles' => ['staff', 'member'],
            ],
            [
                'name' => 'Eileen Dover',
                'email' => "eileen@example.com",
                'password' => 'Password1',
                'roles' => ['member'],
            ],
            [
                'name' => 'Booker Holliday',
                'email' => "booker@example.com",
                'password' => 'Password1',
                'roles' => ['member'],
            ],
            [
                'name' => 'Fallon Dover',
                'email' => "fallon@example.com",
                'password' => 'Password1',
                'roles' => ['member'],
            ],
            [
                'name' => 'Dee Vine',
                'email' => "Dee.Vine@example.com",
                'password' => 'Password1',
                'roles' => ['member'],
            ],
            [
                'name' => 'Lolly Popp',
                'email' => "Lolly.Popp@example.com",
                'password' => 'Password1',
                'roles' => ['member'],
            ],
            [
                'name' => 'Penny Lane',
                'email' => "Penny.Lane@example.com",
                'password' => 'Password1',
                'roles' => ['member'],
            ],
            [
                'name' => 'Penny Less',
                'email' => "Penny.Less@example.com",
                'password' => 'Password1',
                'roles' => ['member'],
            ],
            [
                'name' => 'Skip Dover',
                'email' => "Skip.Dover@example.com",
                'password' => 'Password1',
                'roles' => ['member'],
            ],
        ];

        foreach ($seedUsers as $newUser) {
            $newUser['password'] = Hash::make($newUser['password']);
            $user = User::create([
                'name' => $newUser['name'],
                'email' => $newUser['email'],
                'password' => $newUser['password'],
            ]);

//            foreach ($newUser['roles'] as $role) {
//                $newRole = Role::whereName($role)->first();
//                if (!is_null($newRole)) {
//                    $permissions = Permission::pluck('id', 'id')->all();
//                    $newRole->syncPermissions($permissions);
//                    $user->assignRole([$newRole->id]);
//                }
//            }
        }
    }
}
