<?php

namespace App\Infrastructure\Controller;

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;

interface BaseController
{
    /**
     * @param Request $request
     * @param Response $response
     * @return Response
     */
    public function index(Request $request, Response $response): Response;

    /**
     * @param Request $request
     * @param Response $response
     * @return Response
     */
    public function store(Request $request, Response $response): Response;

    /**
     * @param int $id
     * @param Request $request
     * @param Response $response
     * @return Response
     */
    public function get(int $id, Request $request, Response $response): Response;

    /**
     * @param int $id
     * @param Request $request
     * @param Response $response
     * @return Response
     */
    public function update(int $id, Request $request, Response $response): Response;

    /**
     * @param int $id
     * @param Request $request
     * @param Response $response
     * @return Response
     */
    public function delete(int $id, Request $request, Response $response): Response;
}
