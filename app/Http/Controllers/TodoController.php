<?php

namespace TodoApi\Http\Controllers;

use Illuminate\Container\Container as App;
use Illuminate\Http\Request;
use TodoApi\Http\Controllers\Controller;
use TodoApi\Managers\TodoManager;
use TodoApi\Models\Todo;
use TodoApi\Transformers\TodoTransformer;

/**
 * Todos endpoints. User can list, request one, inster, update or delete todos for him.
 *
 * @Resource("Todos", uri="/v1/todos")
 */
class TodoController extends Controller
{
    /**
     * Manager instance
     *
     * @var \TodoApi\Managers\TodoManager
     */
    private $manager;

    /**
     * Item type
     *
     * @var array
     */
    private $type = [
        'key' => 'todos',
    ];

    /**
     * Constructor method
     *
     * @param  \TodoApi\Managers\TodoManager    $manager
     * @param  \Illuminate\Http\Request         $request
     * @param  \Illuminate\Container\Container  $app
     */
    public function __construct(TodoManager $manager, Request $request, App $app)
    {
        $this->manager = $manager;

        parent::__construct($request, $app);
    }

    /**
     * List of todos
     *
     * Retreive a listing of the todos for current user.
     *
     * @return \Dingo\Api\Http\Response
     *
     * @Get("")
     * @Transaction({
     *      @Request(
     *          headers = {
     *              "apikey": "442195b3-6389-4d8c-a283-4d1d7313d6da",
     *              "Authorization": "Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzdWIiOjEsImlzcyI6Imh0dHA6XC9cL2FwaS50b2RvaXRrLmRldlwvdjFcL2xvZ2luIiwiaWF0IjoxNDc0ODI4NTA2LCJleHAiOjE0NzQ4MzIxMDYsIm5iZiI6MTQ3NDgyODUwNiwianRpIjoiNTdkYjNjZTg0NWRlYmZkNDNkMTQyZTMzNWYyYzU3ZTEifQ.mO5ZlKvZNo_Kr8aIceDtUHtN4DYhpuBJnm0xow_5Yq8"
     *          }
     *      ),
     *      @Response(
     *          200,
     *          body = {
     *              "data": {
     *                  "type": "todos",
     *                  "id": "a207329e-6264-4960-a377-5b6dc8995d19",
     *                  "attributes": {
     *                      "content": "Ab quae quod consequatur itaque porro est corporis rerum. Deserunt quos ab cupiditate.",
     *                      "is_active": false,
     *                      "is_completed": false,
     *                      "created_at": {
     *                          "date": "2016-09-25 19:34:16.000000",
     *                          "timezone_type": 3,
     *                          "timezone": "UTC"
     *                      },
     *                      "updated_at": {
     *                          "date": "2016-09-25 19:34:16.000000",
     *                          "timezone_type": 3,
     *                          "timezone": "UTC"
     *                      }
     *                  }
     *              }
     *          },
     *          attributes = {
     *              @Attribute(
     *                  "data",
     *                  type="object",
     *                  required=true,
     *                  description="List of all todos for the logged in user. NOTE THAT DATA PROPERTY IS AN ARRAY OF TODO OBJECTS."
     *              )
     *          }
     *      ),
     *      @Response(
     *          401,
     *          body = {
     *              "message": "Failed to authenticate because of bad credentials or an invalid authorization header.",
     *              "status_code": 401
     *          },
     *          attributes = {
     *              @Attribute(
     *                  "message",
     *                  type="string",
     *                  required=true,
     *                  description="Error message.",
     *                  sample="Failed to authenticate because of bad credentials or an invalid authorization header."
     *              ),
     *              @Attribute(
     *                  "status_code",
     *                  type="number",
     *                  required=true,
     *                  description="HTTP Status Code.",
     *                  sample=401
     *              )
     *          }
     *      ),
     *      @Response(
     *          403,
     *          body = {
     *              "message": "Api key is not valid.",
     *              "status_code": 403
     *          },
     *          attributes = {
     *              @Attribute(
     *                  "message",
     *                  type="string",
     *                  required=true,
     *                  description="Error message in case sent Api Key isn't valid.",
     *                  sample="Api key is not valid."
     *              ),
     *              @Attribute(
     *                  "status_code",
     *                  type="number",
     *                  required=true,
     *                  description="HTTP Status Code.",
     *                  sample=403
     *              )
     *          }
     *      ),
     *      @Response(
     *          404,
     *          body = {
     *              "message": "404 Not Found.",
     *              "status_code": 404
     *          },
     *          attributes = {
     *              @Attribute(
     *                  "message",
     *                  type="string",
     *                  required=true,
     *                  description="No todos were found.",
     *                  sample="404 Not Found."
     *              ),
     *              @Attribute(
     *                  "status_code",
     *                  type="number",
     *                  required=true,
     *                  description="HTTP Status Code.",
     *                  sample=404
     *              )
     *          }
     *      ),
     *      @Response(
     *          500,
     *          body = {
     *              "message": "500 Internal Server Error",
     *              "status_code": 500
     *          },
     *          attributes = {
     *              @Attribute(
     *                  "message",
     *                  type="string",
     *                  required=true,
     *                  description="Error message.",
     *                  sample="500 Internal Server Error"
     *              ),
     *              @Attribute(
     *                  "status_code",
     *                  type="number",
     *                  required=true,
     *                  description="HTTP Status Code.",
     *                  sample=500
     *              )
     *          }
     *      )
     * })
     */
    public function index()
    {
        $todos = $this->manager->all($this->auth->user());

        $response = $this->response->collection($todos, new TodoTransformer, $this->type);

        return $response;
    }

    /**
     * Create a todo
     *
     * Store a newly created todo in storage.
     *
     * @return \Dingo\Api\Http\Response
     *
     * @Post("/")
     * @Transaction({
     *      @Request(
     *          {
     *              "todo": {
     *                  "type": "todos",
     *                  "attributes": {
     *                      "content": "Lorem ipsum dolor sit amet.",
     *                      "is_active": false,
     *                      "is_completed": false
     *                  }
     *              }
     *          },
     *          headers = {
     *              "apikey": "442195b3-6389-4d8c-a283-4d1d7313d6da",
     *              "Authorization": "Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzdWIiOjEsImlzcyI6Imh0dHA6XC9cL2FwaS50b2RvaXRrLmRldlwvdjFcL2xvZ2luIiwiaWF0IjoxNDc0ODI4NTA2LCJleHAiOjE0NzQ4MzIxMDYsIm5iZiI6MTQ3NDgyODUwNiwianRpIjoiNTdkYjNjZTg0NWRlYmZkNDNkMTQyZTMzNWYyYzU3ZTEifQ.mO5ZlKvZNo_Kr8aIceDtUHtN4DYhpuBJnm0xow_5Yq8"
     *          },
     *          attributes = {
     *              @Attribute(
     *                  "todo",
     *                  type="object",
     *                  required=true,
     *                  description="Todo object with set type, content, is_active and is_completed properties."
     *              )
     *          }
     *      ),
     *      @Response(
     *          201,
     *          body = {
     *              "data": {
     *                  "type": "todos",
     *                  "id": "bf809138-8c0e-4cb5-b194-f649d7f4a1a5",
     *                  "attributes": {
     *                      "content": "Lorem ipsum dolor sit amet.",
     *                      "is_active": false,
     *                      "is_completed": false,
     *                      "created_at": {
     *                          "date": "2016-09-29 18:08:37.000000",
     *                          "timezone_type": 3,
     *                          "timezone": "UTC"
     *                      },
     *                      "updated_at": {
     *                          "date": "2016-09-29 18:08:37.000000",
     *                          "timezone_type": 3,
     *                          "timezone": "UTC"
     *                      }
     *                  }
     *              }
     *          },
     *          headers = {
     *              "Location": "http://api.todoitk.dev/v1/todos/bf809138-8c0e-4cb5-b194-f649d7f4a1a5"
     *          },
     *          attributes = {
     *              @Attribute(
     *                  "data",
     *                  type="object",
     *                  required=true,
     *                  description="Todo object for the created todo."
     *              )
     *          }
     *      ),
     *      @Response(
     *          401,
     *          body = {
     *              "message": "Failed to authenticate because of bad credentials or an invalid authorization header.",
     *              "status_code": 401
     *          },
     *          attributes = {
     *              @Attribute(
     *                  "message",
     *                  type="string",
     *                  required=true,
     *                  description="Error message.",
     *                  sample="Failed to authenticate because of bad credentials or an invalid authorization header."
     *              ),
     *              @Attribute(
     *                  "status_code",
     *                  type="number",
     *                  required=true,
     *                  description="HTTP Status Code.",
     *                  sample=401
     *              )
     *          }
     *      ),
     *      @Response(
     *          403,
     *          body = {
     *              "message": "Api key is not valid.",
     *              "status_code": 403
     *          },
     *          attributes = {
     *              @Attribute(
     *                  "message",
     *                  type="string",
     *                  required=true,
     *                  description="Error message in case sent Api Key isn't valid.",
     *                  sample="Api key is not valid."
     *              ),
     *              @Attribute(
     *                  "status_code",
     *                  type="number",
     *                  required=true,
     *                  description="HTTP Status Code.",
     *                  sample=403
     *              )
     *          }
     *      ),
     *      @Response(
     *          422,
     *          body = {
     *              "message": "422 Unprocessable Entity",
     *              "errors": {
     *                  "is_completed": "The is completed field is required."
     *              },
     *              "status_code": 422
     *          },
     *          attributes = {
     *              @Attribute(
     *                  "message",
     *                  type="string",
     *                  required=true,
     *                  description="Error message.",
     *                  sample="422 Unprocessable Entity"
     *              ),
     *              @Attribute(
     *                  "errors",
     *                  type="object",
     *                  required=true,
     *                  description="Key value pairs of validation errors. Key represents a field name, and value is a validation error."
     *              ),
     *              @Attribute(
     *                  "status_code",
     *                  type="number",
     *                  required=true,
     *                  description="HTTP Status Code.",
     *                  sample=422
     *              )
     *          }
     *      ),
     *      @Response(
     *          500,
     *          body = {
     *              "message": "500 Internal Server Error",
     *              "status_code": 500
     *          },
     *          attributes = {
     *              @Attribute(
     *                  "message",
     *                  type="string",
     *                  required=true,
     *                  description="Error message.",
     *                  sample="500 Internal Server Error"
     *              ),
     *              @Attribute(
     *                  "status_code",
     *                  type="number",
     *                  required=true,
     *                  description="HTTP Status Code.",
     *                  sample=500
     *              )
     *          }
     *      )
     * })
     */
    public function store()
    {
        $data = $this->request->input('data.attributes');

        $todo = $this->manager->create($this->auth->user(), $data);

        $location = route('todos.show', [
            'uuid' => $todo->uuid,
        ]);

        $response = $this->response
            ->item($todo, new TodoTransformer, $this->type)
            ->setStatusCode(201)
            ->withHeader('Location', $location);

        return $response;
    }

    /**
     * Display the specified todo.
     *
     * Retreive a specified todo for current user.
     *
     * @param  string  $uuid
     *
     * @return \Dingo\Api\Http\Response
     *
     * @Get("/{id}")
     * @Parameters({
     *      @Parameter(
     *          "id",
     *          description="The id of the todo.",
     *          required=true,
     *          type="string",
     *          example="a207329e-6264-4960-a377-5b6dc8995d19"
     *      )
     * })
     * @Transaction({
     *      @Request(
     *          headers = {
     *              "apikey": "442195b3-6389-4d8c-a283-4d1d7313d6da",
     *              "Authorization": "Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzdWIiOjEsImlzcyI6Imh0dHA6XC9cL2FwaS50b2RvaXRrLmRldlwvdjFcL2xvZ2luIiwiaWF0IjoxNDc0ODI4NTA2LCJleHAiOjE0NzQ4MzIxMDYsIm5iZiI6MTQ3NDgyODUwNiwianRpIjoiNTdkYjNjZTg0NWRlYmZkNDNkMTQyZTMzNWYyYzU3ZTEifQ.mO5ZlKvZNo_Kr8aIceDtUHtN4DYhpuBJnm0xow_5Yq8"
     *          }
     *      ),
     *      @Response(
     *          200,
     *          body = {
     *              "data": {
     *                  "type": "todos",
     *                  "id": "a207329e-6264-4960-a377-5b6dc8995d19",
     *                  "attributes": {
     *                      "content": "Ab quae quod consequatur itaque porro est corporis rerum. Deserunt quos ab cupiditate.",
     *                      "is_active": false,
     *                      "is_completed": false,
     *                      "created_at": {
     *                          "date": "2016-09-25 19:34:16.000000",
     *                          "timezone_type": 3,
     *                          "timezone": "UTC"
     *                      },
     *                      "updated_at": {
     *                          "date": "2016-09-25 19:34:16.000000",
     *                          "timezone_type": 3,
     *                          "timezone": "UTC"
     *                      }
     *                  }
     *              }
     *          },
     *          attributes = {
     *              @Attribute(
     *                  "data",
     *                  type="object",
     *                  required=true,
     *                  description="Todo object."
     *              )
     *          }
     *      ),
     *      @Response(
     *          401,
     *          body = {
     *              "message": "Failed to authenticate because of bad credentials or an invalid authorization header.",
     *              "status_code": 401
     *          },
     *          attributes = {
     *              @Attribute(
     *                  "message",
     *                  type="string",
     *                  required=true,
     *                  description="Error message.",
     *                  sample="Failed to authenticate because of bad credentials or an invalid authorization header."
     *              ),
     *              @Attribute(
     *                  "status_code",
     *                  type="number",
     *                  required=true,
     *                  description="HTTP Status Code.",
     *                  sample=401
     *              )
     *          }
     *      ),
     *      @Response(
     *          403,
     *          body = {
     *              "message": "Api key is not valid.",
     *              "status_code": 403
     *          },
     *          attributes = {
     *              @Attribute(
     *                  "message",
     *                  type="string",
     *                  required=true,
     *                  description="Error message in case sent Api Key isn't valid.",
     *                  sample="Api key is not valid."
     *              ),
     *              @Attribute(
     *                  "status_code",
     *                  type="number",
     *                  required=true,
     *                  description="HTTP Status Code.",
     *                  sample=403
     *              )
     *          }
     *      ),
     *      @Response(
     *          404,
     *          body = {
     *              "message": "404 Not Found.",
     *              "status_code": 404
     *          },
     *          attributes = {
     *              @Attribute(
     *                  "message",
     *                  type="string",
     *                  required=true,
     *                  description="No todos were found.",
     *                  sample="404 Not Found."
     *              ),
     *              @Attribute(
     *                  "status_code",
     *                  type="number",
     *                  required=true,
     *                  description="HTTP Status Code.",
     *                  sample=404
     *              )
     *          }
     *      ),
     *      @Response(
     *          500,
     *          body = {
     *              "message": "500 Internal Server Error",
     *              "status_code": 500
     *          },
     *          attributes = {
     *              @Attribute(
     *                  "message",
     *                  type="string",
     *                  required=true,
     *                  description="Error message.",
     *                  sample="500 Internal Server Error"
     *              ),
     *              @Attribute(
     *                  "status_code",
     *                  type="number",
     *                  required=true,
     *                  description="HTTP Status Code.",
     *                  sample=500
     *              )
     *          }
     *      )
     * })
     */
    public function show($uuid)
    {
        $todo = $this->manager->get($this->auth->user(), $uuid);

        $response = $this->response->item($todo, new TodoTransformer, $this->type);

        return $response;
    }

    /**
     * Update todo
     *
     * Update the specified resource in storage.
     *
     * @param  string  $uuid
     *
     * @return \Illuminate\Http\Response
     *
     * @Put("/{id}")
     * @Parameters({
     *      @Parameter(
     *          "id",
     *          description="The id of the todo.",
     *          required=true,
     *          type="string",
     *          example="a207329e-6264-4960-a377-5b6dc8995d19"
     *      )
     * })
     * @Transaction({
     *      @Request(
     *          {
     *              "todo": {
     *                  "type": "todos",
     *                  "attributes": {
     *                      "content": "Lorem ipsum dolor sit amet.",
     *                      "is_active": false,
     *                      "is_completed": false
     *                  }
     *              }
     *          },
     *          headers = {
     *              "apikey": "442195b3-6389-4d8c-a283-4d1d7313d6da",
     *              "Authorization": "Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzdWIiOjEsImlzcyI6Imh0dHA6XC9cL2FwaS50b2RvaXRrLmRldlwvdjFcL2xvZ2luIiwiaWF0IjoxNDc0ODI4NTA2LCJleHAiOjE0NzQ4MzIxMDYsIm5iZiI6MTQ3NDgyODUwNiwianRpIjoiNTdkYjNjZTg0NWRlYmZkNDNkMTQyZTMzNWYyYzU3ZTEifQ.mO5ZlKvZNo_Kr8aIceDtUHtN4DYhpuBJnm0xow_5Yq8"
     *          },
     *          attributes = {
     *              @Attribute(
     *                  "todo",
     *                  type="object",
     *                  required=true,
     *                  description="Todo object with set type, and any of content, is_active and is_completed properties."
     *              )
     *          }
     *      ),
     *      @Response(
     *          200,
     *          body = {
     *              "data": {
     *                  "type": "todos",
     *                  "id": "bf809138-8c0e-4cb5-b194-f649d7f4a1a5",
     *                  "attributes": {
     *                      "content": "Lorem ipsum dolor sit amet.",
     *                      "is_active": false,
     *                      "is_completed": false,
     *                      "created_at": {
     *                          "date": "2016-09-29 18:08:37.000000",
     *                          "timezone_type": 3,
     *                          "timezone": "UTC"
     *                      },
     *                      "updated_at": {
     *                          "date": "2016-09-29 18:08:37.000000",
     *                          "timezone_type": 3,
     *                          "timezone": "UTC"
     *                      }
     *                  }
     *              }
     *          },
     *          headers = {
     *              "Location": "http://api.todoitk.dev/v1/todos/bf809138-8c0e-4cb5-b194-f649d7f4a1a5"
     *          },
     *          attributes = {
     *              @Attribute(
     *                  "data",
     *                  type="object",
     *                  required=true,
     *                  description="Todo object for the created todo."
     *              )
     *          }
     *      ),
     *      @Response(
     *          401,
     *          body = {
     *              "message": "Failed to authenticate because of bad credentials or an invalid authorization header.",
     *              "status_code": 401
     *          },
     *          attributes = {
     *              @Attribute(
     *                  "message",
     *                  type="string",
     *                  required=true,
     *                  description="Error message.",
     *                  sample="Failed to authenticate because of bad credentials or an invalid authorization header."
     *              ),
     *              @Attribute(
     *                  "status_code",
     *                  type="number",
     *                  required=true,
     *                  description="HTTP Status Code.",
     *                  sample=401
     *              )
     *          }
     *      ),
     *      @Response(
     *          403,
     *          body = {
     *              "message": "Api key is not valid.",
     *              "status_code": 403
     *          },
     *          attributes = {
     *              @Attribute(
     *                  "message",
     *                  type="string",
     *                  required=true,
     *                  description="Error message in case sent Api Key isn't valid.",
     *                  sample="Api key is not valid."
     *              ),
     *              @Attribute(
     *                  "status_code",
     *                  type="number",
     *                  required=true,
     *                  description="HTTP Status Code.",
     *                  sample=403
     *              )
     *          }
     *      ),
     *      @Response(
     *          422,
     *          body = {
     *              "message": "422 Unprocessable Entity",
     *              "errors": {
     *                  "is_active": "The is active field must be true or false."
     *              },
     *              "status_code": 422
     *          },
     *          attributes = {
     *              @Attribute(
     *                  "message",
     *                  type="string",
     *                  required=true,
     *                  description="Error message.",
     *                  sample="422 Unprocessable Entity"
     *              ),
     *              @Attribute(
     *                  "errors",
     *                  type="object",
     *                  required=true,
     *                  description="Key value pairs of validation errors. Key represents a field name, and value is a validation error."
     *              ),
     *              @Attribute(
     *                  "status_code",
     *                  type="number",
     *                  required=true,
     *                  description="HTTP Status Code.",
     *                  sample=422
     *              )
     *          }
     *      ),
     *      @Response(
     *          500,
     *          body = {
     *              "message": "500 Internal Server Error",
     *              "status_code": 500
     *          },
     *          attributes = {
     *              @Attribute(
     *                  "message",
     *                  type="string",
     *                  required=true,
     *                  description="Error message.",
     *                  sample="500 Internal Server Error"
     *              ),
     *              @Attribute(
     *                  "status_code",
     *                  type="number",
     *                  required=true,
     *                  description="HTTP Status Code.",
     *                  sample=500
     *              )
     *          }
     *      )
     * })
     */
    public function update($uuid)
    {
        $data = $this->request->input('data.attributes');

        $todo = $this->manager->update($this->auth->user(), $data, $uuid);

        $location = route('todos.show', [
            'uuid' => $todo->uuid,
        ]);

        $response = $this->response
            ->item($todo, new TodoTransformer, $this->type)
            ->withHeader('Location', $location);

        return $response;
    }

    /**
     * Remove todo
     *
     * Remove the specified todo from storage.
     *
     * @param  string  $uuid
     *
     * @return \Dingo\Api\Http\Response
     *
     * @Delete("/{id}")
     * @Parameters({
     *      @Parameter(
     *          "id",
     *          description="The id of the todo.",
     *          required=true,
     *          type="string",
     *          example="a207329e-6264-4960-a377-5b6dc8995d19"
     *      )
     * })
     * @Transaction({
     *      @Request(
     *          headers = {
     *              "apikey": "442195b3-6389-4d8c-a283-4d1d7313d6da",
     *              "Authorization": "Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzdWIiOjEsImlzcyI6Imh0dHA6XC9cL2FwaS50b2RvaXRrLmRldlwvdjFcL2xvZ2luIiwiaWF0IjoxNDc0ODI4NTA2LCJleHAiOjE0NzQ4MzIxMDYsIm5iZiI6MTQ3NDgyODUwNiwianRpIjoiNTdkYjNjZTg0NWRlYmZkNDNkMTQyZTMzNWYyYzU3ZTEifQ.mO5ZlKvZNo_Kr8aIceDtUHtN4DYhpuBJnm0xow_5Yq8"
     *          }
     *      ),
     *      @Response(
     *          204
     *      ),
     *      @Response(
     *          401,
     *          body = {
     *              "message": "Failed to authenticate because of bad credentials or an invalid authorization header.",
     *              "status_code": 401
     *          },
     *          attributes = {
     *              @Attribute(
     *                  "message",
     *                  type="string",
     *                  required=true,
     *                  description="Error message.",
     *                  sample="Failed to authenticate because of bad credentials or an invalid authorization header."
     *              ),
     *              @Attribute(
     *                  "status_code",
     *                  type="number",
     *                  required=true,
     *                  description="HTTP Status Code.",
     *                  sample=401
     *              )
     *          }
     *      ),
     *      @Response(
     *          403,
     *          body = {
     *              "message": "Api key is not valid.",
     *              "status_code": 403
     *          },
     *          attributes = {
     *              @Attribute(
     *                  "message",
     *                  type="string",
     *                  required=true,
     *                  description="Error message in case sent Api Key isn't valid.",
     *                  sample="Api key is not valid."
     *              ),
     *              @Attribute(
     *                  "status_code",
     *                  type="number",
     *                  required=true,
     *                  description="HTTP Status Code.",
     *                  sample=403
     *              )
     *          }
     *      ),
     *      @Response(
     *          500,
     *          body = {
     *              "message": "500 Internal Server Error",
     *              "status_code": 500
     *          },
     *          attributes = {
     *              @Attribute(
     *                  "message",
     *                  type="string",
     *                  required=true,
     *                  description="Error message.",
     *                  sample="500 Internal Server Error"
     *              ),
     *              @Attribute(
     *                  "status_code",
     *                  type="number",
     *                  required=true,
     *                  description="HTTP Status Code.",
     *                  sample=500
     *              )
     *          }
     *      )
     * })
     */
    public function destroy($uuid)
    {
        $destroy = $this->manager->remove($this->auth->user(), $uuid);

        $response = $this->response->noContent();

        return $response;
    }
}
