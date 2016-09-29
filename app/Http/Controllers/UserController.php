<?php

namespace TodoApi\Http\Controllers;

use Illuminate\Container\Container as App;
use Illuminate\Http\Request;
use TodoApi\Http\Controllers\Controller;
use TodoApi\Transformers\UserTransformer;

/**
 * Users endpoints. User can receive data about him.
 *
 * @Resource("Users", uri="/v1/users")
 */
class UserController extends Controller
{
    /**
     * Item type
     *
     * @var array
     */
    private $type = [
        'key' => 'users',
    ];

    /**
     * Constructor method
     *
     * @param  \Illuminate\Http\Request         $request
     * @param  \Illuminate\Container\Container  $app
     */
    public function __construct(Request $request, App $app)
    {
        parent::__construct($request, $app);
    }

    /**
     * Me
     *
     * Get info about current user.
     *
     * @return \Dingo\Api\Http\Response
     *
     * @Get("/me")
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
     *                  "type": "users",
     *                  "id": "cbbae68f-55bd-4dd3-8264-c367ce7d8446",
     *                  "attributes": {
     *                      "name": "John Smith",
     *                      "email": "john.smith@example.com",
     *                      "created_at": {
     *                          "date": "2016-09-29 16:43:20.000000",
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
     *                  description="Users data object."
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
    public function me()
    {
        $me = $this->auth->user();

        return $this->response->item($me, new UserTransformer, $this->type);
    }
}
