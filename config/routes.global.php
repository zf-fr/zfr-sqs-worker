<?php

use ZfrEbWorker\WorkerMiddleware;

return [
    'routes' => [
        [
            'name'            => 'internal.worker',
            'path'            => '/internal/worker',
            'middleware'      => WorkerMiddleware::class,
            'allowed_methods' => ['POST'],
        ],
    ],
];