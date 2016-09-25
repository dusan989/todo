<?php

abstract class TestCase extends Illuminate\Foundation\Testing\TestCase
{
    /**
     * Users data
     *
     * @var array
     */
    protected $users = [
        'exists' => [
            'name' => 'Jablan Sparić',
            'email' => 'grdan.demonjic@example.org',
            'uuid' => '40ac2ad0-b8f2-4dd7-ab16-eea136968bbe',
            'password' => '123456789',
        ],
    ];

    /**
     * The base URL to use while testing the application.
     *
     * @var string
     */
    protected $baseUrl = 'http://127.0.0.1/v1';

    /**
     * Api Auth data
     *
     * @var array
     */
    protected $apiAuth = [
        'uuid' => '442195b3-6389-4d8c-a283-4d1d7313d6da',
        'name' => 'Todo API Admin Panel',
    ];

    /**
     * Creates the application.
     *
     * @return \Illuminate\Foundation\Application
     */
    public function createApplication()
    {
        $app = require __DIR__.'/../bootstrap/app.php';

        $app->make(Illuminate\Contracts\Console\Kernel::class)->bootstrap();

        return $app;
    }

    /**
     * @before
     *
     * @return void
     */
    public function setupDB()
    {
        $this->artisan('migrate:refresh');
        $this->artisan('db:seed');
    }
}
