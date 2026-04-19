<?php

namespace App\Http\Controllers;

use OpenApi\Attributes as OA;

#[OA\Info(
    version: '1.0.0',
    description: 'API documentation for My Application',
    title: 'My Application API',
    contact: new OA\Contact(
        name: 'API Support',
        url: 'https://example.com/support',
        email: 'support@example.com'
    ),
    license: new OA\License(
        name: 'Apache 2.0',
        url: 'https://www.apache.org/licenses/LICENSE-2.0.html'
    )
)]
abstract class Controller {}
