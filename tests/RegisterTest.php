<?php

/**
 * Register tests
 */
class RegisterTest extends TestCase
{
    /**
     * User to be registered
     *
     * @var array
     */
    protected $user = [
        'name' => 'Register User',
        'email' => 'register.user@example.org',
        'password' => '123456789',
    ];

    /**
     * A successfull registration test.
     *
     * @return void
     */
    public function testSuccessfullRegister()
    {
        $response = $this->json('POST', '/register', [
            'name' => $this->user['name'],
            'email' => $this->user['email'],
            'password' => $this->user['password'],
        ], [
            'apikey' => $this->apiAuth['uuid'],
        ]);

        $response->assertResponseStatus(201);
        $response->seeJsonStructure([
            'data' => [
                'type',
                'id',
                'attributes' => [
                    'name',
                    'email',
                    'created_at' => [
                        'date',
                        'timezone_type',
                        'timezone',
                    ],
                ],
            ],
        ]);

        $this->seeInDatabase('users', [
            'name' => $this->user['name'],
            'email' => $this->user['email'],
        ]);
    }

    /**
     * A password fail registration test.
     *
     * @return void
     */
    public function testPasswordFailRegister()
    {
        $response = $this->json('POST', '/register', [
            'name' => $this->user['name'],
            'email' => $this->user['email'],
            'password' => false,
        ], [
            'apikey' => $this->apiAuth['uuid'],
        ]);

        $response->assertResponseStatus(422);
        $response->seeJsonStructure([
            'message',
            'errors' => [
                'password'
            ],
        ]);
    }

    /**
     * A name fail registration test.
     *
     * @return void
     */
    public function testNameFailRegister()
    {
        $response = $this->json('POST', '/register', [
            'email' => $this->user['email'],
            'password' => '123456789',
        ], [
            'apikey' => $this->apiAuth['uuid'],
        ]);

        $response->assertResponseStatus(422);
        $response->seeJsonStructure([
            'message',
            'errors' => [
                'name'
            ],
        ]);
    }

    /**
     * A user already exists registration test.
     *
     * @return void
     */
    public function testUserAlreadyExistsRegister()
    {
        $response = $this->json('POST', '/register', [
            'name' => $this->user['name'],
            'email' => $this->users['exists']['email'],
            'password' => $this->user['password'],
        ], [
            'apikey' => $this->apiAuth['uuid'],
        ]);

        $response->assertResponseStatus(422);
        $response->seeJsonStructure([
            'message',
            'errors' => [
                'email'
            ],
        ]);
    }

    /**
     * A apikey not found registration test.
     *
     * @return void
     */
    public function testApiKeyNotFoundRegister()
    {
        $response = $this->json('POST', '/register', [
            'name' => $this->user['name'],
            'email' => $this->user['email'],
            'password' => $this->user['password'],
        ], [
            'apikey' => 'wrong-api-key',
        ]);

        $response->assertResponseStatus(403);
    }
}
