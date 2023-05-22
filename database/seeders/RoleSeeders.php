<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class RoleSeeders extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $userdata =
            [
                [
                    'username' => 'admin01',
                    'fullname' => 'adminone',
                    'role' => 'admin',
                    'email' => 'admin01@gmail.com',
                    'image' => '/photo/admin.png',
                    'email_verified' => true,
                    'email_verified_at' => now(),
                    'verification_token' => Str::random(60),
                    'password' => Hash::make('123')
                ],
                [
                    'username' => 'admin02',
                    'fullname' => 'admintwo',
                    'role' => 'admin',
                    'email' => 'admin02@gmail.com',
                    'image' => '/photo/admin.png',
                    'email_verified' => true,
                    'email_verified_at' => now(),
                    'verification_token' => Str::random(60),
                    'password' => Hash::make('123')

                ],
                [
                    'username' => 'admin03',
                    'fullname' => 'adminthree',
                    'role' => 'admin',
                    'email' => 'admin03@gmail.com',
                    'image' => '/photo/admin.png',
                    'email_verified' => true,
                    'email_verified_at' => now(),
                    'verification_token' => Str::random(60),
                    'password' => Hash::make('123')

                ],
                [
                    'username' => 'admin04',
                    'fullname' => 'adminfour',
                    'role' => 'admin',
                    'email' => 'admin04@gmail.com',
                    'image' => '/photo/admin.png',
                    'email_verified' => true,
                    'email_verified_at' => now(),
                    'verification_token' => Str::random(60),
                    'password' => Hash::make('123')

                ],
            ];
        foreach ($userdata as $key => $val) {
            User::create($val);
        }
    }
}
