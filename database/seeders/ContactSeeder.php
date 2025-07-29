<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Contact;

class ContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Contact::factory(10)->create();
        Contact::factory()->create([
            'name' => 'yusef',
            'phone' => '01095132780',
            'email' => 'yuseframy14@gmail.com',
            'comment' => 'Very Good',
        ]);

    }
}
