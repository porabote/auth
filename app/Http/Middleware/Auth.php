<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class Auth
{

    private $privateToken = 'Wow789234';

    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        // If it not api user
        if(
            $request->header('Authorization')
        ) {

            $token = $this->getToken($request->header('Authorization'));

            if($token['token']) {



            } else {

                return response()->json([
                    'errors' => [  [
                        'status' => 403,
                        'title' => 'You aren`t authorized: your token is empty.'
                    ]]
                ], 403);

            }

        } else {

            if($request->getPathInfo() != '/api/users/login') {

                return redirect()->action(
                    '\App\Http\Controllers\UsersController@login'//, ['id' => 1]
                );
            }
        }
        return $next($request);
    }

    function getToken($authHeader)
    {
        $authHeader = explode(" ", $authHeader);

        return [
            'scheme' => (isset($authHeader[0])) ? $authHeader[0] : null,
            'token' => (isset($authHeader[1]) && strtolower($authHeader[1] != "null")) ? $authHeader[1] : null,
        ];
    }
}
