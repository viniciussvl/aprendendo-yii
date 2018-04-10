<?php
return [
    'administrador' => [
        'type' => 1,
        'children' => [
            'post-index',
            'post-create',
            'post-edit',
            'post-delete',
        ],
    ],
    'surpervisor' => [
        'type' => 1,
        'children' => [
            'post-create',
            'post-edit',
            'post-index',
        ],
    ],
    'operador' => [
        'type' => 1,
        'children' => [
            'post-index',
        ],
    ],
    'post-index' => [
        'type' => 2,
    ],
    'post-create' => [
        'type' => 2,
    ],
    'post-edit' => [
        'type' => 2,
    ],
    'post-delete' => [
        'type' => 2,
    ],
];
