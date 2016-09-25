<?php

use Illuminate\Database\Seeder;
use TodoApi\Models\ApiAuth;

class ApiAuthsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $apiAuth = new ApiAuth;
        $apiAuth->uuid = Uuid::generate(4);
        $apiAuth->name = 'Todo API Admin Panel';
        $apiAuth->is_admin = true;
        $apiAuth->save();
    }
}
