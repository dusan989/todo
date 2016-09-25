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
 * Auth Controller
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
     * Login method
     *
     * @return \Dingo\Api\Http\Response
     */
    public function login()
    {
        $credentials = $this->request->only('email', 'password');

        $token = $this->manager->login($credentials);
        $response = $this->response->array($token);

        return $response;
    }

    /**
     * Register method
     *
     * @return \Dingo\Api\Http\Response
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
