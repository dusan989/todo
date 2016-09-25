<?php

namespace TodoApi\Http\Controllers;

use Dingo\Api\Routing\Helpers;
use Illuminate\Container\Container as App;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;

/**
 * Base Controller
 */
class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests, Helpers;

    /**
     * Request instance
     *
     * @var \Illuminate\Http\Request
     */
    protected $request;

    /**
     * App instance
     *
     * @var \Illuminate\Container\Container
     */
    protected $app;

    /**
     * Constructor method
     *
     * @param \Illuminate\Http\Request         $request
     * @param \Illuminate\Container\Container  $app
     */
    public function __construct(Request $request, App $app)
    {
        $this->request = $request;
        $this->app = $app;
    }
}
