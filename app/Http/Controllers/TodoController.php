<?php

namespace TodoApi\Http\Controllers;

use Illuminate\Container\Container as App;
use Illuminate\Http\Request;
use TodoApi\Models\Todo;
use TodoApi\Transformers\TodoTransformer;

class TodoController extends Controller
{
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
     * @param  \Illuminate\Http\Request  $request
     * @param  \Illuminate\Container\Container  $app
     */
    public function __construct(Request $request, App $app)
    {
        parent::__construct($request, $app);
    }

    /**
     * Display a listing of the todos for current user.
     *
     * @return \Dingo\Api\Http\Response
     */
    public function index()
    {
        $todos = $this->auth->user()->todos;

        if (empty($todos)) {
            $response = $this->response->errorNotFound();
        } else {
            $response = $this->response->collection($todos, new TodoTransformer, $this->type);
        }

        return $response;
    }

    // /**
    //  * Store a newly created resource in storage.
    //  *
    //  * @return \Dingo\Api\Http\Response
    //  */
    // public function store()
    // {
    //     //
    // }

    /**
     * Display the specified resource.
     *
     * @param  string  $uuid
     * @return \Dingo\Api\Http\Response
     */
    public function show($uuid)
    {
        $todo = Todo::where('uuid', $uuid)->first();

        if (empty($todo)) {
            $response = $this->response->errorNotFound();
        } else {
            $response = $this->response->item($todo, new TodoTransformer, $this->type);
        }

        return $response;
    }

    // /**
    //  * Update the specified resource in storage.
    //  *
    //  * @param  int  $id
    //  * @return \Illuminate\Http\Response
    //  */
    // public function update($id)
    // {
    //     //
    // }

    /**
     * Remove the specified resource from storage.
     *
     * @param  string  $uuid
     * @return \Dingo\Api\Http\Response
     */
    public function destroy($uuid)
    {
        $todo = Todo::where('uuid', $uuid)->first();

        if (empty($todo)) {
            $response = $this->response->noContent();
        } else {
            if ($todo->delete()) {
                // TODO Fix this
                $response = $this->response->noContent();
            } else {
                $response = $this->response->errorInternal();
            }
        }

        return $response;
    }
}
