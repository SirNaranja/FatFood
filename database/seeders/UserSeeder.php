<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Role;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $role_user=Role::where('role','user')->first();
        $role_admin=Role::where('role','admin')->first();
        $user=new User();
        $user->name="admin";
        $user->email="admin@fatfood.com";
        $user->password = bcrypt('secret');
        $user->save();
        $user->roles()->attach($role_admin);
    }
}
