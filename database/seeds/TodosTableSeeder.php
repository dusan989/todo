<?php

use Illuminate\Database\Seeder;

class TodosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(TodoApi\Models\Todo::class)->create([
            'content' => 'Ab quae quod consequatur itaque porro est corporis rerum. Deserunt quos ab cupiditate.',
            'is_active' => false,
            'is_completed' => false,
            'uuid' => 'a207329e-6264-4960-a377-5b6dc8995d19',
            'user_id' => 1,
        ]);

        factory(TodoApi\Models\Todo::class)->create([
            'content' => 'Laudantium et ea consequuntur animi atque. Distinctio reiciendis omnis odio.',
            'is_active' => true,
            'is_completed' => false,
            'uuid' => '26225fbc-d939-47c0-bfdf-22497412e577',
            'user_id' => 1,
        ]);

        factory(TodoApi\Models\Todo::class)->create([
            'content' => 'Consequuntur officiis sed ratione eaque nulla tempore voluptatum. Inventore et illum nihil.',
            'is_active' => false,
            'is_completed' => true,
            'uuid' => 'e40eef6f-5fe0-4d96-ac90-0dfce79fae93',
            'user_id' => 1,
        ]);

        factory(TodoApi\Models\Todo::class)->create([
            'content' => 'Dolorem voluptatem explicabo fuga fugit. Dolor nobis cum tempore adipisci.',
            'is_active' => false,
            'is_completed' => false,
            'uuid' => 'b2fd29bd-1581-4dad-b8ed-a2c739a5ad46',
            'user_id' => 2,
        ]);

        factory(TodoApi\Models\Todo::class)->create([
            'content' => 'Rerum tenetur qui incidunt eos. Ut exercitationem officia eum non. Ab velit sequi sed eos.',
            'is_active' => true,
            'is_completed' => false,
            'uuid' => '3494ec1c-40a9-4cf5-b8cd-12cc8dafe779',
            'user_id' => 2,
        ]);
    }
}
