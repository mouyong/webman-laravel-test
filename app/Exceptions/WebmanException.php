<?php

namespace App\Exceptions;

use Throwable;
use Webman\Http\Request;
use Webman\Http\Response;

class WebmanException extends \support\exception\Handler
{
    /**
     * @param Throwable $exception
     * @return void
     */
    public function report(Throwable $exception)
    {
        (new Handler(app()))->report($exception);
    }

    /**
     * @param Request $request
     * @param Throwable $exception
     * @return Response
     */
    public function render(Request $request, Throwable $exception): Response
    {
        try {
            return (new Handler(app()))->render($request, $exception);
        } catch (\Throwable $e) {
            return parent::render($request, $exception);
        }
    }
}