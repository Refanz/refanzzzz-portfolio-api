<?php

namespace App\Util;

use Psr\Http\Message\ResponseInterface as Response;

final class ResponseUtil
{
    public static function createResponse(Response $response, int $statusCode, mixed $data): Response
    {
        $response->getBody()->write(json_encode($data));

        return $response
            ->withHeader('Content-type', 'application/json')
            ->withStatus($statusCode);
    }
}
