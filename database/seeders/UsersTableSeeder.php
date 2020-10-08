<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        $users = [
            [
                'id'             => 1,
                'name'           => 'Admin',
                'email'          => 'admin@admin.com',
                'password'       => '$2y$10$rA.UbFkvBY0TnPXC5AvdEew7ITCs.PFo9eAfkH.m48GlOdhFMXvLG',
                'remember_token' => null,
                'created_at'     => '2020-10-08 06:09:29',
                'updated_at'     => '2020-10-08 06:09:29',
            ],
        ];

        User::insert($users);
    }
}
