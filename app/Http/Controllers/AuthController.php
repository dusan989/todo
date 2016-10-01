<?php

namespace TodoApi\Http\Controllers;

use Illuminate\Container\Container as App;
use Illuminate\Http\Request;
use TodoApi\Http\Controllers\Controller;
use TodoApi\Managers\AuthManager;
use TodoApi\Transformers\UserTransformer;

/**
 * Authentication endpoints. User can login or register.
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
     * Login user by sending his email and password in JSON format.
     *
     * @return \Dingo\Api\Http\Response
     */
    public function login()
    {
        $credentials = $this->request->only('email', 'password');

        $token = $this->manager->login($credentials);

        return $this->response->array([
            'data' => $token,
        ]);
    }

    /**
     * Register user by sending his name, email and password in JSON format.
     *
     * @return \Dingo\Api\Http\Response
     */
    public function register()
    {
        $credentials = $this->request->only('email', 'password', 'name');

        $user = $this->manager->register($credentials);

        return $this->response
            ->item($user, new UserTransformer)
            ->setStatusCode(201);
    }
}
