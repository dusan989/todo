<?php

namespace TodoApi\Providers;

use Illuminate\Support\ServiceProvider;
use League\Fractal\Manager;
use \League\Fractal\Serializer\JsonApiSerializer;
use Dingo\Api\Transformer\Adapter\Fractal;

class FractalServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(Manager::class, function ($app) {
            $fractal = new Manager;

            $serializer = new JsonApiSerializer(config('domain'));

            $fractal->setSerializer($serializer);

            return $fractal;
        });

        $this->app->bind(Fractal::class, function ($app) {
            $fractal = $app->make(Manager::class);

            return new Fractal($fractal);
        });
    }
}
