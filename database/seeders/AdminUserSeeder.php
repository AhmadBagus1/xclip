<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::updateOrCreate(
            ['email' => 'admin@xclip.com'],
            [
                'name' => 'Super Admin',
                'password' => Hash::make('AdminXclip123!'),
                'login_attempts' => 0,
                'locked_until' => null,
                'last_login_at' => null,
            ]
        );
    }
}
