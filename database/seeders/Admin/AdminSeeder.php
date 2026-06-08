<?php

namespace Database\Seeders\Admin;
use App\Models\Admin;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $admin = new Admin();
        $admin->name = 'SUPER Admin';
        $admin->email = 'admin@example.com';
        $admin->password = bcrypt('123456789');
        $admin->save();
    }
}
