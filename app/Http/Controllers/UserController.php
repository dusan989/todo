<?php

namespace TodoApi\Http\Controllers;

use Illuminate\Http\Request;
use TodoApi\Models\User;
use TodoApi\Transformers\UserTransformer;

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
     * @param  \Illuminate\Http\Request  $request
     * @param  \Illuminate\Container\Container  $app
     */
    public function __construct(Request $request, App $app)
    {
        parent::__construct($request, $app);
    }

    /**
     * Get info about current user
     *
     * @return \Dingo\Api\Http\Response
     */
    public function me()
    {
        $me = $this->auth->user();

        return $this->response->item($me, new UserTransformer, $this->type);
    }
}
