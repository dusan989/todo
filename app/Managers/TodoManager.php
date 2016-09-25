<?php

namespace TodoApi\Managers;

use Dingo\Api\Exception\ValidationHttpException;
use Illuminate\Validation\Factory as Validator;
use Symfony\Component\HttpKernel\Exception\HttpException;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use TodoApi\Models\Todo;
use TodoApi\Models\User;
use Tymon\JWTAuth\Exceptions\JWTException;
use Tymon\JWTAuth\Facades\JWTAuth;
use Uuid;

/**
 * Todo Manager
 */
class TodoManager
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
     * Get all todos for the given user
     *
     * @param  \TodoApi\Models\User   $user
     *
     * @return \Illuminate\Support\Collection
     *
     * @throws \Symfony\Component\HttpKernel\Exception\NotFoundHttpException
     */
    public function all(User $user)
    {
        $todos = $user->todos;

        if ($todos->isEmpty()) {
            throw new NotFoundHttpException;
        }

        return $todos;
    }

    /**
     * Get particular todo for the given user
     *
     * @param  \TodoApi\Models\User $user
     * @param  string               $uuid
     *
     * @return \TodoApi\Models\Todo
     *
     * @throws \Symfony\Component\HttpKernel\Exception\NotFoundHttpException
     */
    public function get(User $user, $uuid)
    {
        $todo = $user->todos()->where('uuid', $uuid);
        if ($todo->exists()) {
            $response = $todo->first();
        } else {
            throw new NotFoundHttpException;
        }

        return $response;
    }

    /**
     * Remove particular todo for the given user
     *
     * @param  \TodoApi\Models\User $user
     * @param  string               $uuid
     *
     * @return boolean
     *
     * @throws \Symfony\Component\HttpKernel\Exception\HttpException
     * @throws \Symfony\Component\HttpKernel\Exception\NotFoundHttpException
     */
    public function remove(User $user, $uuid)
    {
        $todo = $this->get($user, $uuid);

        if ($todo->delete()) {
            $response = true;
        } else {
            throw new HttpException(500);
        }

        return $response;
    }

    /**
     * Create todo for given user
     *
     * @param  \TodoApi\Models\User $user
     * @param  array                $data
     *
     * @return \TodoApi\Models\Todo
     *
     * @throws \Dingo\Api\Exception\ValidationHttpException
     * @throws \Symfony\Component\HttpKernel\Exception\HttpException
     */
    public function create($user, array $data)
    {
        $validator = $this->validator->make($data, [
            'content'    => 'required|string',
            'is_active' => 'required|boolean',
            'is_completed' => 'required|boolean',
        ]);

        if ($validator->fails()) {
            throw new ValidationHttpException($validator->errors());
        }

        $todo = new Todo;
        $todo->uuid = Uuid::generate(4);
        $todo->content = $data['content'];
        $todo->is_active = $data['is_active'];
        $todo->is_completed = $data['is_completed'];
        $todo->user_id = $user->id;

        if ($todo->save()) {
            $response = $todo;
        } else {
            throw new HttpException(500);
        }

        return $todo;
    }

    /**
     * Update todo for given user
     *
     * @param  \TodoApi\Models\User $user
     * @param  array                $data
     * @param  string               $uuid
     *
     * @return \TodoApi\Models\Todo
     *
     * @throws \Dingo\Api\Exception\ValidationHttpException
     * @throws \Symfony\Component\HttpKernel\Exception\HttpException
     */
    public function update($user, array $data, $uuid)
    {
        $validator = $this->validator->make($data, [
            'content'    => 'string',
            'is_active' => 'boolean',
            'is_completed' => 'boolean',
        ]);

        if ($validator->fails()) {
            throw new ValidationHttpException($validator->errors());
        }

        $todo = $this->get($user, $uuid);
        $todo->content = (isset($data['content'])) ? $data['content'] : $todo->content;
        $todo->is_active = (isset($data['is_active'])) ? $data['is_active'] : $todo->is_active;
        $todo->is_completed = (isset($data['is_completed'])) ? $data['is_completed'] : $todo->is_completed;

        if ($todo->save()) {
            $response = $todo;
        } else {
            throw new HttpException(500);
        }

        return $response;
    }
}
