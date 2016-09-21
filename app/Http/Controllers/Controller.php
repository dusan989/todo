<?php

namespace TodoApi\Http\Controllers;

use Dingo\Api\Routing\Helpers;
use Illuminate\Container\Container as App;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests, Helpers;

    protected $request;

    protected $app;

    public function __construct(Request $request, App $app)
    {
        $this->request = $request;
        $this->app = $app;
    }
}
