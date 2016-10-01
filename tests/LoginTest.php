<?php

/**
 * Login Tests
 */
class LoginTest extends TestCase
{
    /**
     * A successfull login test.
     *
     * @return void
     */
    public function testSuccessfullLogin()
    {
        $response = $this->json('POST', '/login', [
            'email' => $this->users['exists']['email'],
            'password' => $this->users['exists']['password'],
        ], [
            'apikey' => $this->apiAuth['uuid'],
        ]);

        $response->assertResponseOK();
        $response->seeJsonStructure([
            'data' => [
                'token',
            ],
        ]);
    }

    /**
     * A user not found login test.
     *
     * @return void
     */
    public function testUserNotFoundLogin()
    {
        $response = $this->json('POST', '/login', [
            'email' => $this->users['exists']['email'],
            'password' => '12345678',
        ], [
            'apikey' => $this->apiAuth['uuid'],
        ]);

        $response->assertResponseStatus(404);
    }

    /**
     * A apikey not found login test.
     *
     * @return void
     */
    public function testApiKeyNotFoundLogin()
    {
        $response = $this->json('POST', '/login', [
            'email' => $this->users['exists']['email'],
            'password' => $this->users['exists']['password'],
        ]);

        $response->assertResponseStatus(403);
    }

    /**
     * A Me login test.
     *
     * @return void
     */
    public function testMeLogin()
    {
        $login = $this->json('POST', '/login', [
            'email' => $this->users['exists']['email'],
            'password' => $this->users['exists']['password'],
        ], [
            'apikey' => $this->apiAuth['uuid'],
        ])->response->getContent();

        $login = json_decode($login);

        $me = $this->json('GET', '/users/me', [], [
            'apikey' => $this->apiAuth['uuid'],
            'Authorization' => 'Bearer ' . $login->data->token,
        ]);

        $me->assertResponseOK();
        $me->seeJsonStructure([
            'data' => [
                'name',
                'email',
                'created_at' => [
                    'date',
                    'timezone_type',
                    'timezone',
                ],
            ],
        ]);
        $me->seeJson([
            'name' => 'Jablan Sparić',
            'email' => 'grdan.demonjic@example.org',
            'id' => '40ac2ad0-b8f2-4dd7-ab16-eea136968bbe',
        ]);
    }
}
