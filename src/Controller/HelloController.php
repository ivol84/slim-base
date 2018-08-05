<?php
namespace Controller;


class HelloController implements SlimController
{
    private $container;
    /**
     * HelloController constructor.
     */
    public function __construct($container)
    {
        $this->container = $container;
    }

    public function sayHi()
    {
        // You can access to container thrue $this
        $this->container->get('view')->render($this->container->get('response'), "index.twig");
    }

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
        $this->sayHi();
    }
}