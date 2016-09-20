<?php

namespace TodoApi\Http\Controllers;

use Illuminate\Http\Request;
use TodoApi\Models\Todo;
use TodoApi\Transformers\TodoTransformer;

class TodoController extends Controller
{
    /**
     * @param  \Illuminate\Http\Request  $request
     */
    public function __construct(Request $request)
    {
        parent::__construct($request);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $todos = $this->auth->user()->todos;

        return $this->response->collection($todos, new TodoTransformer, [
            'key' => 'todos',
        ]);
    }

    // /**
    //  * Store a newly created resource in storage.
    //  *
    //  * @return \Illuminate\Http\Response
    //  */
    // public function store()
    // {
    //     //
    // }
    //
    // /**
    //  * Display the specified resource.
    //  *
    //  * @param  int  $id
    //  * @return \Illuminate\Http\Response
    //  */
    // public function show($id)
    // {
    //     //
    // }
    //
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
    //
    // /**
    //  * Remove the specified resource from storage.
    //  *
    //  * @param  int  $id
    //  * @return \Illuminate\Http\Response
    //  */
    // public function destroy($id)
    // {
    //     //
    // }
}
