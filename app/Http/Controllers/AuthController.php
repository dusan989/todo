<?php

namespace TodoApi\Http\Controllers;

use Dingo\Api\Exception\ValidationHttpException;
use Illuminate\Http\Request;
use Symfony\Component\HttpKernel\Exception\HttpException;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use TodoApi\Http\Controllers\Controller;
use TodoApi\Models\User;
use TodoApi\Transformers\UserTransformer;
use Tymon\JWTAuth\Exceptions\JWTException;
use Tymon\JWTAuth\Facades\JWTAuth;
use Uuid;
use Illuminate\Container\Container as App;

class AuthController extends Controller
{
    /**
     * Constructor method
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Illuminate\Container\Container  $app
     */
    public function __construct(Request $request, App $app)
    {
        parent::__construct($request, $app);
    }

    /**
     * Login method
     *
     * @return \Dingo\Api\Http\Response
     *
     * @throws \Dingo\Api\Exception\ValidationHttpException
     */
    public function login()
    {
        $credentials = $this->request->only('email', 'password');

        $validator = app('validator')->make($credentials, [
            'email' => 'required|email',
            'password' => 'required|string|min:8',
        ]);

        if ($validator->fails()) {
            throw new ValidationHttpException($validator->errors());
        }

        try {
            $token = JWTAuth::attempt($credentials);
            if (!$token) {
                $response = $this->response->errorNotFound();
            } else {
                $response = $this->response->array([
                    'token' => $token,
                ]);
            }
        } catch (JWTException $e) {
            $response = $this->response->errorInternal();
        }

        return $response;
    }

    /**
     * Register method
     *
     * @return \Dingo\Api\Http\Response
     *
     * @throws \Dingo\Api\Exception\ValidationHttpException
     */
    public function register()
    {
        $userData = $this->request->only('email', 'password', 'name');

        $validator = app('validator')->make($userData, [
            'email' => 'required|email',
            'password' => 'required|string|min:8',
            'name' => 'required|string|min:5',
        ]);

        if ($validator->fails()) {
            throw new ValidationHttpException($validator->errors());
        }

        $user = new User;
        $user->uuid = Uuid::generate(4);
        $user->name = $userData['name'];
        $user->password = bcrypt($userData['password']);
        $user->email = $userData['email'];

        if ($user->save()) {
            $response = $this->response->created();
        } else {
            $response = $this->response->errorInternal();
        }

        return $response;
    }
}
