<?php

namespace Core;

class App {
    private Router $router;
    private string $requestUri;
    private string $requestMethod;

    public function __construct(Router $router, string $requestUri, string $requestMethod)
    {
        $this->router = $router;
        $this->requestUri = $requestUri;
        $this->requestMethod = $requestMethod;
    }

    public  function run() {
        $this->router->resolve($this->requestUri, strtolower($this->requestMethod));
    }
}