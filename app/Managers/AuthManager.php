<?php

namespace TodoApi\Managers;

use Dingo\Api\Exception\ValidationHttpException;
use Illuminate\Validation\Factory as Validator;
use Symfony\Component\HttpKernel\Exception\HttpException;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use TodoApi\Models\User;
use Tymon\JWTAuth\Exceptions\JWTException;
use Tymon\JWTAuth\Facades\JWTAuth;
use Uuid;

/**
 * Auth Manager
 */
class AuthManager
{
    /**
     * Validator instance
     *
     * @var \Illuminate\Validation\Factory
     */
    protected $validator;

    /**
     * Constructor method
     *
     * @param \Illuminate\Validation\Factory $validator
     */
    public function __construct(Validator $validator)
    {
        $this->validator = $validator;
    }

    /**
     * Try to login user with given credentials
     *
     * @param  array  $credentials
     *
     * @return array
     *
     * @throws \Symfony\Component\HttpKernel\Exception\HttpException
     * @throws \Symfony\Component\HttpKernel\Exception\NotFoundHttpException
     */
    public function login(array $credentials)
    {
        try {
            $token = JWTAuth::attempt($credentials);
            if (!$token) {
                throw new NotFoundHttpException;
            } else {
                return [
                    'token' => $token,
                ];
            }
        } catch (JWTException $e) {
            throw new HttpException(500);
        }
    }

    /**
     * Try to register user with given credentials
     *
     * @param  array  $credentials
     *
     * @return \TodoApi\Models\User
     *
     * @throws \Dingo\Api\Exception\ValidationHttpException
     * @throws \Symfony\Component\HttpKernel\Exception\HttpException
     */
    public function register(array $credentials)
    {
        $validator = $this->validator->make($credentials, [
            'email'    => 'required|email|unique:users',
            'password' => 'required|string|min:8',
            'name'     => 'required|string|min:5',
        ]);

        if ($validator->fails()) {
            throw new ValidationHttpException($validator->errors());
        }

        $user = new User;
        $user->uuid = Uuid::generate(4);
        $user->name = $credentials['name'];
        $user->password = bcrypt($credentials['password']);
        $user->email = $credentials['email'];

        if ($user->save()) {
            $response = $user;
        } else {
            throw new HttpException(500);
        }

        return $response;
    }
}
