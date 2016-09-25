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
        $apiAuth->uuid = '442195b3-6389-4d8c-a283-4d1d7313d6da';
        $apiAuth->name = 'Todo API Admin Panel';
        $apiAuth->is_admin = true;
        $apiAuth->save();
    }
}
