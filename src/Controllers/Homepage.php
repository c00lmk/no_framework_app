<?php


namespace no_framework_app\Controllers;


use Http\Response;

class Homepage
{
    private $response;

    public function __construct(Response $response)
    {
        $this->response = $response;
    }

    public function show()
    {
        $this->response->setContent('Hello World');
    }


}