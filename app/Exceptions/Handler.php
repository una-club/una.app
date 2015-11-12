<?php

namespace App\Exceptions;

use Exception;
use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Symfony\Component\HttpKernel\Exception\HttpException;

class Handler extends ExceptionHandler
{
    /**
     * A list of the exception types that should not be reported.
     *
     * @var array
     */
    protected $dontReport = [
        HttpException::class
    ];

    /**
     * Report or log an exception.
     *
     * This is a great spot to send exceptions to Sentry, Bugsnag, etc.
     *
     * @param  \Exception $e
     * @return void
     */
    public function report(Exception $e)
    {
        return parent::report($e);
    }

    /**
     * Render an exception into an HTTP response.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \Exception $e
     * @return \Illuminate\Http\Response
     */
    public function render($request, Exception $e)
    {
        if ($this->isHttpException($e)) {
            return $this->renderHttpException($e);
        } else {
            return parent::render($request, $e);
        }
    }

    /**
     * Render the given HttpException.
     *
     * @param  \Symfony\Component\HttpKernel\Exception\HttpException $e
     * @return \Symfony\Component\HttpFoundation\Response
     */
    protected function renderHttpException(HttpException $e)
    {
        if (view()->exists('templates.common.errors.' . $e->getStatusCode())) {

            // load base JS
            \JavaScript::put([
                'base_url' => url('/'),
                'site_name' => config('settings.app_name')
            ]);

            $seoMeta = [
                'page_title' => 'Erreur '.$e->getStatusCode(),
                'meta_desc' => 'La page demandée n\'existe pas.',
                'meta_keywords' => ''
            ];
            $data = [
                'seoMeta' => $seoMeta,
                'css' => elixir('css/app.error.css')
            ];

            return response()->view('templates.common.errors.' . $e->getStatusCode(), $data, $e->getStatusCode());
        } else {
            return (new SymfonyDisplayer(config('app.debug')))->createResponse($e);
        }
    }

}
