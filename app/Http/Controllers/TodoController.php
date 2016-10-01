<?php

namespace TodoApi\Http\Controllers;

use Illuminate\Container\Container as App;
use Illuminate\Http\Request;
use TodoApi\Http\Controllers\Controller;
use TodoApi\Managers\TodoManager;
use TodoApi\Models\Todo;
use TodoApi\Transformers\TodoTransformer;

/**
 * Todos endpoints. User can list, request one, inster, update or delete todos for him.
 *
 * @Resource("Todos", uri="/v1/todos")
 */
class TodoController extends Controller
{
    /**
     * Manager instance
     *
     * @var \TodoApi\Managers\TodoManager
     */
    private $manager;

    /**
     * Constructor method
     *
     * @param  \TodoApi\Managers\TodoManager    $manager
     * @param  \Illuminate\Http\Request         $request
     * @param  \Illuminate\Container\Container  $app
     */
    public function __construct(TodoManager $manager, Request $request, App $app)
    {
        $this->manager = $manager;

        parent::__construct($request, $app);
    }

    /**
     * Retreive a listing of the todos for current user.
     *
     * @return \Dingo\Api\Http\Response
     */
    public function index()
    {
        $todos = $this->manager->all($this->auth->user());

        $response = $this->response->collection($todos, new TodoTransformer);

        return $response;
    }

    /**
     * Store a newly created todo in storage.
     *
     * @return \Dingo\Api\Http\Response
     */
    public function store()
    {
        $data = $this->request->only('content', 'is_active', 'is_completed');

        $todo = $this->manager->create($this->auth->user(), $data);

        $location = route('todos.show', [
            'uuid' => $todo->uuid,
        ]);

        $response = $this->response
            ->item($todo, new TodoTransformer)
            ->setStatusCode(201)
            ->withHeader('Location', $location);

        return $response;
    }

    /**
     * Retreive a specified todo for current user.
     *
     * @param  string  $uuid
     *
     * @return \Dingo\Api\Http\Response
     */
    public function show($uuid)
    {
        $todo = $this->manager->get($this->auth->user(), $uuid);

        // NOTE It is not possible to return null and 200
        if (is_null($todo)) {
            $response = $this->response->array([
                'data' => null
            ]);
        } else {
            $response = $this->response->item($todo, new TodoTransformer);
        }

        return $response;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  string  $uuid
     *
     * @return \Illuminate\Http\Response
     */
    public function update($uuid)
    {
        $data = [];
        if (isset($this->request->content)) {
            $data['content'] = $this->request->content;
        }
        if (isset($this->request->is_active)) {
            $data['is_active'] = $this->request->is_active;
        }
        if (isset($this->request->is_completed)) {
            $data['is_completed'] = $this->request->is_completed;
        }

        $todo = $this->manager->update($this->auth->user(), $data, $uuid);

        $location = route('todos.show', [
            'uuid' => $todo->uuid,
        ]);

        $response = $this->response
            ->item($todo, new TodoTransformer)
            ->withHeader('Location', $location);

        return $response;
    }

    /**
     * Remove the specified todo from storage.
     *
     * @param  string  $uuid
     *
     * @return \Dingo\Api\Http\Response
     */
    public function destroy($uuid)
    {
        $destroy = $this->manager->remove($this->auth->user(), $uuid);

        $response = $this->response->noContent();

        return $response;
    }
}
