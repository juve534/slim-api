<?php
declare(strict_types=1);

use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

class Sample
{
    public function __invoke(Request $request, Response $response)
    {
        $name = $request->getAttribute('name');
        $response->getBody()->write("Hello, $name");
        return $response;
    }
}