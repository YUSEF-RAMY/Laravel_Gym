<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\User::factory(10)->create();

        \App\Models\User::factory()->create([
            'name' => 'Sudo',
            'email' => 'yuseframy14@gmail.com',
            'password' => bcrypt('password123'), // أو Hash::make('password123')
            'role' => 'admin', // ← تأكد إنك ضفت العمود دا في جدول users
        ]);
    }
}
