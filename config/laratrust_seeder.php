<?php

return [
    /**
     * Control if the seeder should create a user per role while seeding the data.
     */
    'create_users' => false,

    /**
     * Control if all the laratrust tables should be truncated before running the seeder.
     */
    'truncate_tables' => true,

    'roles_structure' => [
        'superadministrator' => [
            'users' => 'c,r,u,d',
            'payments' => 'c,r,u,d',
            'profile' => 'r,u',
            'hardware_categories' => 'c,r,u,d',
            'hardware_inventories' => 'c,r,u,d',
            'sales_discounts' => 'c,r,u,d',
            'hardwares' => 'c,r,u,d'
        ],
        'administrator' => [
            'users' => 'c,r,u,d',
            'profile' => 'r,u',
            'hardware_categories' => 'c,r,u,d',
            'hardware_inventories' => 'c,r,u,d',
            'sales_discounts' => 'c,r,u,d',
            'hardwares' => 'c,r,u,d'
        ],
        'owner' => [
            'hardware_categories' => 'c,r,u,d',
            'hardware_inventories' => 'c,r,u,d',
            'sales_discounts' => 'c,r,u,d',
            'hardwares' => 'c,r,u,d'
        ],
        'user' => [
            'profile' => 'r,u',
        ]
    ],

    'permissions_map' => [
        'c' => 'create',
        'r' => 'read',
        'u' => 'update',
        'd' => 'delete'
    ]
];
