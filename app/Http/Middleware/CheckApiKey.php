<?php

namespace TodoApi\Http\Middleware;

use Closure;
use Symfony\Component\HttpKernel\Exception\AccessDeniedHttpException;
use TodoApi\Models\ApiAuth;

/**
 * Check if request has a valid apikey
 */
class CheckApiKey
{
    /**
     * Name of the Api Key header
     *
     * @var string
     */
    private $apiKey = 'apikey';

    /**
     * Api Key isn't valid message
     *
     * @var string
     */
    private $notValidMessage = 'Api key is not valid.';

    /**
     * Handle an incoming request.
     *
     * @param \Illuminate\Http\Request $request
     * @param \Closure                 $next
     * @param boolean                  $isAdmin
     *
     * @return mixed
     */
    public function handle($request, Closure $next, $isAdmin = false)
    {
        $header = $request->header($this->apiKey, false);

        if ($header) {
            $apiAuth = ApiAuth::where('uuid', $header);

            if ($apiAuth->exists()) {
                if ($isAdmin) {
                    $apiAuth = $apiAuth->first();
                    if ($apiAuth->is_admin) {
                        return $next($request);
                    } else {
                        $this->notValid();
                    }
                }
                return $next($request);
            }
        }

        $this->notValid();
    }

    /**
     * Api key isn't valid
     *
     * @return void
     *
     * @throws \Symfony\Component\HttpKernel\Exception\AccessDeniedHttpException
     */
    private function notValid()
    {
        throw new AccessDeniedHttpException($this->notValidMessage);
    }
}
