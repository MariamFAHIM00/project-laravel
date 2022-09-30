<?php

namespace App\Exceptions;

use Throwable;
use GuzzleHttp\Psr7\Request;
use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class Handler extends ExceptionHandler
{
    /**
     * A list of the exception types that are not reported.
     *
     * @var array<int, class-string<Throwable>>
     */
    protected $dontReport = [
        //
    ];

    /**
     * A list of the inputs that are never flashed for validation exceptions.
     *
     * @var array<int, string>
     */
    protected $dontFlash = [
        'current_password',
        'password',
        'password_confirmation',
    ];

    /**
     * Register the exception handling callbacks for the application.
     *
     * @return void
     */
    public function register()
    {

        $this->renderable(function (Throwable $exception,$request) {
            if(!auth()->guard("admin")->check()){
                if ($request->is('admin') || $request->is('admin/*')) {
                    return redirect()->guest("/admin/login");
                }
        }         
        // return parent::render($request,$exception);
        });
        
        $this->reportable(function (Request $request,Throwable $e) {
            //
        });
    }
}
