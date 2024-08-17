<?php

namespace App\Swagger;

use OpenApi\Attributes as OA;

#[OA\SecurityScheme(
    securityScheme: 'ApiToken',
    type: 'http',
    name: 'ApiToken',
    scheme: 'bearer'
)]
final class Security {}
