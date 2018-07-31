<?php
namespace Controller;


class HelloController implements SlimController
{

    /**
     * Example middleware invokable class
     *
     * @param  \Psr\Http\Message\ServerRequestInterface $request PSR7 request
     * @param  \Psr\Http\Message\ResponseInterface $response PSR7 response
     * @param  array $arguments method arguments
     *
     * @return \Psr\Http\Message\ResponseInterface
     */
    public function __invoke($request, $response, $arguments)
    {
        // You can access to container thrue $this
        $this->view->render("index.twig");
    }
}