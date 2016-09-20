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

class AuthController extends Controller
{
    /**
     * @param  \Illuminate\Http\Request  $request
     */
    public function __construct(Request $request)
    {
        parent::__construct($request);
    }

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
                return $this->response->errorNotFound();
            }
        } catch (JWTException $e) {
            return $this->response->errorInternal();
        }

        return $this->response->array([
            'token' => $token,
        ]);
    }

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
            return $this->response->created();
        } else {
            return $this->response->errorInternal();
        }
    }
}
