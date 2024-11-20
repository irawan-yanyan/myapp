<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // User::factory()
        //         ->count(10)
        //         ->create();

        // $user = User::find(13);
        // //$role = ['11','13'];
        // $role = ['12'];
        // $user->roles()->sync($role);

        $users = User::factory()->count(1)->create();
        $roles = Role::factory()->count(2)->create();
       // $users->roles()->attach($roles);

    }
}
