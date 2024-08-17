<?php

namespace App\Http\Controllers;

use OpenApi\Attributes as OA;

abstract class Controller
{
    #[OA\Get(
        path: '/api/example',
        summary: 'Пример запроса',
        description: 'Это описание примера запроса',
        tags: ['Example'],
        responses: [
            new OA\Response(
                response: 200,
                description: 'Успешный ответ'
            ),
            new OA\Response(
                response: 400,
                description: 'Ошибка в запросе'
            ),
        ]
    )]
    public function index() {}
}
