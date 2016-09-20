<?php

namespace TodoApi\Http\Controllers;

use Illuminate\Http\Request;
use TodoApi\Models\User;
use TodoApi\Transformers\UserTransformer;

class UserController extends Controller
{
    public function __construct(Request $request)
    {
        parent::__construct($request);
    }

    public function index()
    {
        $user = User::all();

        return $this->response->collection($user, new UserTransformer, [
            'key' => 'users',
        ]);
    }

    public function me()
    {
        return $this->response->item($this->auth->user(), new UserTransformer, [
            'key' => 'users',
            'relationship' => 'todos',
        ]);
    }
}
