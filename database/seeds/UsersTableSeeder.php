<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(TodoApi\Models\User::class)->create([
            'name' => 'Jablan Sparić',
            'email' => 'grdan.demonjic@example.org',
            'uuid' => '40ac2ad0-b8f2-4dd7-ab16-eea136968bbe',
        ]);

        factory(TodoApi\Models\User::class)->create([
            'name' => 'Sonja Gligorić',
            'email' => 'zvjezdana.banjalic@example.com',
            'uuid' => 'f4e68c61-9075-4512-b566-34be6501eef9',
        ]);

        factory(TodoApi\Models\User::class)->create([
            'name' => 'Marija Zatežić',
            'email' => 'stasa12@example.org',
            'uuid' => 'be8b518f-1db9-4f6a-9dfb-0cd24c1eaf0f',
        ]);
    }
}
