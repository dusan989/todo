<?php

use TodoApi\Models\Todo;

/**
 * Todo Tests
 */
class TodoTest extends TestCase
{
    /**
     * JWT-AUTH token
     *
     * @var string
     */
    protected $token = 'jwt-auth-token';

    /**
     * Todo data
     *
     * @var array
     */
    protected $todo = [
        'content' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut, velit.',
        'is_active' => false,
        'is_completed' => true,
    ];

    /**
     * @before
     *
     * @return [void]
     */
    public function loginUser()
    {
        $login = $this->json('POST', '/login', [
            'email' => $this->users['exists']['email'],
            'password' => $this->users['exists']['password'],
        ], [
            'apikey' => $this->apiAuth['uuid'],
        ])->response->getContent();

        $login = json_decode($login);

        $this->token = $login->token;
    }

    /**
     * A successfull all todos test.
     *
     * @return void
     */
    public function testSuccessfullAllTodos()
    {
        $response = $this->json('GET', '/todos', [], [
            'apikey' => $this->apiAuth['uuid'],
            'Authorization' => 'Bearer ' . $this->token,
        ]);

        $response->assertResponseOK();
        $response->seeJsonStructure([
            'data' => [
                '*' => [
                    'type',
                    'id',
                    'attributes' => [
                        'content',
                        'is_active',
                        'is_completed',
                        'created_at',
                    ],
                ],
            ],
        ]);
    }

    /**
     * A successfull particular todo test.
     *
     * @return void
     */
    public function testSuccessfullTodo()
    {
        $response = $this->json('GET', '/todos/a207329e-6264-4960-a377-5b6dc8995d19', [], [
            'apikey' => $this->apiAuth['uuid'],
            'Authorization' => 'Bearer ' . $this->token,
        ]);

        $response->assertResponseOK();
        $response->seeJsonStructure([
            'data' => [
                'type',
                'id',
                'attributes' => [
                    'content',
                    'is_active',
                    'is_completed',
                    'created_at',
                ],
            ],
        ]);
        $response->seeJson([
            'type' => 'todos',
            'content' => 'Ab quae quod consequatur itaque porro est corporis rerum. Deserunt quos ab cupiditate.',
        ]);
    }

    /**
     * A not found particular todo test.
     *
     * @return void
     */
    public function testNotFoundTodo()
    {
        $response = $this->json('GET', '/todos/b2fd29bd-1581-4dad-b8ed-a2c739a5ad46', [], [
            'apikey' => $this->apiAuth['uuid'],
            'Authorization' => 'Bearer ' . $this->token,
        ]);

        $response->assertResponseStatus(404);
    }

    /**
     * A successfull remove todo test.
     *
     * @return void
     */
    public function testSuccessfullRemoveTodo()
    {
        $this->seeInDatabase('todos', [
            'uuid' => 'a207329e-6264-4960-a377-5b6dc8995d19',
        ]);

        $response = $this->json('DELETE', '/todos/a207329e-6264-4960-a377-5b6dc8995d19', [], [
            'apikey' => $this->apiAuth['uuid'],
            'Authorization' => 'Bearer ' . $this->token,
        ]);

        $response->assertResponseStatus(204);

        $this->dontSeeInDatabase('todos', [
            'uuid' => 'a207329e-6264-4960-a377-5b6dc8995d19',
        ]);
    }

    /**
     * A not found remove todo test.
     *
     * @return void
     */
    public function testNotFoundRemoveTodo()
    {
        $this->seeInDatabase('todos', [
            'uuid' => '3494ec1c-40a9-4cf5-b8cd-12cc8dafe779',
        ]);

        $response = $this->json('DELETE', '/todos/3494ec1c-40a9-4cf5-b8cd-12cc8dafe779', [], [
            'apikey' => $this->apiAuth['uuid'],
            'Authorization' => 'Bearer ' . $this->token,
        ]);

        $response->assertResponseStatus(404);

        $this->seeInDatabase('todos', [
            'uuid' => '3494ec1c-40a9-4cf5-b8cd-12cc8dafe779',
        ]);
    }

    /**
     * A successfull create todo test.
     *
     * @return void
     */
    public function testSuccessfullCreateTodo()
    {
        $response = $this->json('POST', '/todos', [
            'data' => [
                'type' => 'todos',
                'attributes' => [
                    'content' => $this->todo['content'],
                    'is_active' => $this->todo['is_active'],
                    'is_completed' => $this->todo['is_completed'],
                ],
            ],
        ], [
            'apikey' => $this->apiAuth['uuid'],
            'Authorization' => 'Bearer ' . $this->token,
        ]);

        $response->assertResponseStatus(201);
        $response->seeJsonStructure([
            'data' => [
                'type',
                'id',
                'attributes' => [
                    'content',
                    'is_active',
                    'is_completed',
                    'created_at',
                ],
            ],
        ]);
        $response->seeJson([
            'type' => 'todos',
            'content' => $this->todo['content'],
            'is_active' => $this->todo['is_active'],
            'is_completed' => $this->todo['is_completed'],
        ]);
    }

    /**
     * A unvalid create todo test.
     *
     * @return void
     */
    public function testUnvalidCreateTodo()
    {
        $response = $this->json('POST', '/todos', [
            'data' => [
                'type' => 'todos',
                'attributes' => [
                    'content' => $this->todo['content'],
                    'is_active' => $this->todo['is_active'],
                ],
            ],
        ], [
            'apikey' => $this->apiAuth['uuid'],
            'Authorization' => 'Bearer ' . $this->token,
        ]);

        $response->assertResponseStatus(422);
        $response->seeJsonStructure([
            'message',
            'errors' => [
                'is_completed'
            ],
        ]);
    }

    /**
     * A successfull update todo test.
     *
     * @return void
     */
    public function testSuccessfullUpdateTodo()
    {
        $todoForUpdate = Todo::where('uuid', 'a207329e-6264-4960-a377-5b6dc8995d19')->first();

        $response = $this->json('PUT', '/todos/a207329e-6264-4960-a377-5b6dc8995d19', [
            'data' => [
                'type' => 'todos',
                'attributes' => [
                    'content' => 'updated content',
                    'is_active' => true,
                ],
            ],
        ], [
            'apikey' => $this->apiAuth['uuid'],
            'Authorization' => 'Bearer ' . $this->token,
        ]);

        $response->assertResponseStatus(200);
        $response->seeJsonStructure([
            'data' => [
                'type',
                'id',
                'attributes' => [
                    'content',
                    'is_active',
                    'is_completed',
                    'created_at',
                ],
            ],
        ]);
        $response->seeJson([
            'type' => 'todos',
            'content' => 'updated content',
            'is_active' => true,
            'is_completed' => false,
            'id' => 'a207329e-6264-4960-a377-5b6dc8995d19',
        ]);
        $response->seeInDatabase('todos', [
            'uuid' => 'a207329e-6264-4960-a377-5b6dc8995d19',
            'content' => 'updated content',
            'is_active' => true,
            'is_completed' => false,
        ]);
    }

    /**
     * A unvalid update todo test.
     *
     * @return void
     */
    public function testUnvalidUpdateTodo()
    {
        $todoForUpdate = Todo::where('uuid', 'a207329e-6264-4960-a377-5b6dc8995d19')->first();

        $response = $this->json('PUT', '/todos/a207329e-6264-4960-a377-5b6dc8995d19', [
            'data' => [
                'type' => 'todos',
                'attributes' => [
                    'content' => 'updated content',
                    'is_active' => 'some string',
                ],
            ],
        ], [
            'apikey' => $this->apiAuth['uuid'],
            'Authorization' => 'Bearer ' . $this->token,
        ]);

        $response->assertResponseStatus(422);
        $response->seeJsonStructure([
            'message',
            'errors' => [
                'is_active'
            ],
        ]);

        $response->seeInDatabase('todos', [
            'uuid' => 'a207329e-6264-4960-a377-5b6dc8995d19',
            'content' => $todoForUpdate->content,
            'is_active' => $todoForUpdate->is_active,
            'is_completed' => $todoForUpdate->is_completed,
        ]);
    }
}
