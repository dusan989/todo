<?php

namespace TodoApi\Http\Controllers;

use Illuminate\Container\Container as App;
use Illuminate\Http\Request;
use TodoApi\Http\Controllers\Controller;
use TodoApi\Managers\TodoManager;
use TodoApi\Models\Todo;
use TodoApi\Transformers\TodoTransformer;

/**
 * Todo Controller
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
     * Item type
     *
     * @var array
     */
    private $type = [
        'key' => 'todos',
    ];

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
     * Display a listing of the todos for current user.
     *
     * @return \Dingo\Api\Http\Response
     */
    public function index()
    {
        $todos = $this->manager->all($this->auth->user());

        $response = $this->response->collection($todos, new TodoTransformer, $this->type);

        return $response;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return \Dingo\Api\Http\Response
     */
    public function store()
    {
        $data = $this->request->input('data.attributes');

        $todo = $this->manager->create($this->auth->user(), $data);

        $location = route('todos.show', [
            'uuid' => $todo->uuid,
        ]);

        $response = $this->response
            ->item($todo, new TodoTransformer, $this->type)
            ->setStatusCode(201)
            ->withHeader('Location', $location);

        return $response;
    }

    /**
     * Display the specified resource.
     *
     * @param  string  $uuid
     *
     * @return \Dingo\Api\Http\Response
     */
    public function show($uuid)
    {
        $todo = $this->manager->get($this->auth->user(), $uuid);

        $response = $this->response->item($todo, new TodoTransformer, $this->type);

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
        $data = $this->request->input('data.attributes');

        $todo = $this->manager->update($this->auth->user(), $data, $uuid);

        $location = route('todos.show', [
            'uuid' => $todo->uuid,
        ]);

        $response = $this->response
            ->item($todo, new TodoTransformer, $this->type)
            ->withHeader('Location', $location);

        return $response;
    }

    /**
     * Remove the specified resource from storage.
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
