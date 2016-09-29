<?php

namespace TodoApi\Http\Controllers;

use Illuminate\Container\Container as App;
use Illuminate\Http\Request;
use Symfony\Component\HttpKernel\Exception\HttpException;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use TodoApi\Http\Controllers\Controller;
use TodoApi\Managers\AuthManager;
use TodoApi\Transformers\UserTransformer;
use Dingo\Api\Exception\ValidationHttpException;

/**
 * Authentication endpoints. User can login or register.
 *
 * @Resource("Authentication", uri="/v1")
 */
class AuthController extends Controller
{
    /**
     * Manager instance
     *
     * @var \TodoApi\Managers\AuthManager
     */
    private $manager;

    /**
     * Constructor method
     *
     * @param  \TodoApi\Managers\AuthManager    $manager
     * @param  \Illuminate\Http\Request         $request
     * @param  \Illuminate\Container\Container  $app
     */
    public function __construct(AuthManager $manager, Request $request, App $app)
    {
        $this->manager = $manager;

        parent::__construct($request, $app);
    }

    /**
     * Login
     *
     * Login user by sending his email and password in JSON format.
     *
     * @return \Dingo\Api\Http\Response
     *
     * @Post("/login")
     * @Transaction({
     *      @Request(
     *          {
     *              "email": "john.smith@example.com",
     *              "password": "123456789"
     *          },
     *          headers = {
     *              "apikey": "442195b3-6389-4d8c-a283-4d1d7313d6da"
     *          },
     *          attributes = {
     *              @Attribute(
     *                  "email",
     *                  type="string",
     *                  required=true,
     *                  description="User's email. Must be valid email.",
     *                  sample="john.smith@example.com"
     *              ),
     *              @Attribute(
     *                  "password",
     *                  type="string",
     *                  required=true,
     *                  description="User's password. Must be at least 8 characters long.",
     *                  sample="123456789"
     *              )
     *          }
     *      ),
     *      @Response(
     *          200,
     *          body = {
     *              "token":"eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzdWIiOjEsImlzcyI6Imh0dHA6XC9cL2FwaS50b2RvaXRrLmRldlwvdjFcL2xvZ2luIiwiaWF0IjoxNDc0ODI4NTA2LCJleHAiOjE0NzQ4MzIxMDYsIm5iZiI6MTQ3NDgyODUwNiwianRpIjoiNTdkYjNjZTg0NWRlYmZkNDNkMTQyZTMzNWYyYzU3ZTEifQ.mO5ZlKvZNo_Kr8aIceDtUHtN4DYhpuBJnm0xow_5Yq8"
     *          },
     *          attributes = {
     *              @Attribute(
     *                  "token",
     *                  type="string",
     *                  required=true,
     *                  description="Authorization JWT Token.",
     *                  sample="eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzdWIiOjEsImlzcyI6Imh0dHA6XC9cL2FwaS50b2RvaXRrLmRldlwvdjFcL2xvZ2luIiwiaWF0IjoxNDc0ODI4NTA2LCJleHAiOjE0NzQ4MzIxMDYsIm5iZiI6MTQ3NDgyODUwNiwianRpIjoiNTdkYjNjZTg0NWRlYmZkNDNkMTQyZTMzNWYyYzU3ZTEifQ.mO5ZlKvZNo_Kr8aIceDtUHtN4DYhpuBJnm0xow_5Yq8"
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
     *              "message": "404 Not Found",
     *              "status_code": 404
     *          },
     *          attributes = {
     *              @Attribute(
     *                  "message",
     *                  type="string",
     *                  required=true,
     *                  description="Error message.",
     *                  sample="404 Not Found"
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
     *          422,
     *          body = {
     *              "message": "422 Unprocessable Entity",
     *              "errors": {
     *                  "password": "The password must be at least 8 characters."
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
    public function login()
    {
        $credentials = $this->request->only('email', 'password');

        $token = $this->manager->login($credentials);
        $response = $this->response->array($token);

        return $response;
    }

    /**
     * Register
     *
     * Register user by sending his name, email and password in JSON format.
     *
     * @return \Dingo\Api\Http\Response
     *
     * @Post("/register")
     * @Transaction({
     *      @Request(
     *          {
     *              "name": "John Smith",
     *              "email": "john.smith@example.com",
     *              "password": "123456789"
     *          },
     *          headers = {
     *              "apikey": "442195b3-6389-4d8c-a283-4d1d7313d6da"
     *          },
     *          attributes = {
     *              @Attribute(
     *                  "name",
     *                  type="string",
     *                  required=true,
     *                  description="User's name.",
     *                  sample="John Smith"
     *              ),
     *              @Attribute(
     *                  "email",
     *                  type="string",
     *                  required=true,
     *                  description="User's email. Must be valid email.",
     *                  sample="john.smith@example.com"
     *              ),
     *              @Attribute(
     *                  "password",
     *                  type="string",
     *                  required=true,
     *                  description="User's password. Must be at least 8 characters long.",
     *                  sample="123456789"
     *              )
     *          }
     *      ),
     *      @Response(
     *          201,
     *          body = {
     *              "data": {
     *                  "type": "users",
     *                  "id": "69c66dbc-16f1-4aca-8f5b-67258d9f4d71",
     *                  "attributes": {
     *                      "name": "John Smith",
     *                      "email": "john.smit1h@example.com",
     *                      "created_at": {
     *                          "date": "2016-09-29 16:45:30.000000",
     *                          "timezone_type": 3,
     *                          "timezone": "UTC"
     *                      }
     *                  }
     *              }
     *          },
     *          headers = {
     *              "Location": "http://api.todoitk.dev/v1/users/me"
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
     *                  "email": "The email has already been taken."
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
    public function register()
    {
        $credentials = $this->request->only('email', 'password', 'name');

        $user = $this->manager->register($credentials);
        $location = route('users.me');
        $response = $this->response
            ->item($user, new UserTransformer, [
                'key' => 'users',
            ])
            ->setStatusCode(201)
            ->withHeader('Location', $location);

        return $response;
    }
}
