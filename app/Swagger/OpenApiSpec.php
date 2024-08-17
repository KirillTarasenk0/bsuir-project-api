<?php

namespace App\Swagger;

use OpenApi\Attributes as OA;

#[OA\OpenApi(
    info: new OA\Info(
        version: '1.0.0',
        description: 'BSUIR project API documentation',
        title: 'BSUIR project API documentation'
    )
)]
interface OpenApiSpec {}
