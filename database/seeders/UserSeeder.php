<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = ['admin', 'pengawas', 'petugas', 'pemohon'];

        $faker = Faker::create();

        foreach($users as $user)
        {
            User::create([
                'name' => $faker->name,
                'email' => $user . '@mail.com',
                'email_verified_at' => now(),
                'password' => Hash::make($user),
                'remember_token' => Str::random(10),
                'role' => $user
            ]);
        }
    }
}
