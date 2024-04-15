<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Alberto',
            'email' => 'albertovillardiaz@yahoo.com',
            'password' => Hash::make('12345678'), // Usa un hash para la contraseña
            ]);
        User::factory(10)->create();

        $role1='admin';
        $role2='cliente';
        $user= User::find(1);
        $user->assignRole($role1);

        $otherUsers = User::where('id', '>', 1)->get();
        foreach ($otherUsers as $user) {
            $user->assignRole($role2);
        }
      //  ->assignRole('Admin')
    }
}
