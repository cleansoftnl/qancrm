<?php
return [
    'backend_sidebar' => [
        '_root' => [
            'order' => 1,
            'children' => [
                [
                    'text' => 'System',
                    'type' => 'header',
                    'order' => 0,
                ],
                [
                    'route' => 'pxcms.admin.index',
                    'text' => 'Dashboard',
                    'icon' => 'fa-dashboard',
                    'order' => 1,
                ],
            ],
        ],
        'Site Management' => [
            'order' => 2,
            'children' => [],
        ],
        'User Management' => [
            'order' => 3,
            'children' => [],
        ],
        [
            'text' => 'SystemCP',
            'type' => 'header',
            'order' => 100,
        ],
        'System CP' => [
            'children' => [
                [
                    'route' => 'admin.config.website',
                    'text' => 'Configuration',
                    'icon' => 'fa-wrench',
                    'order' => 1,
                    'permission' => 'manage@admin_config',
                    'activePattern' => '\/{backend}\/config\/*',
                ],
                [
                    'route' => 'admin.config.theme',
                    'text' => 'Theme Manager',
                    'icon' => 'fa-image',
                    'order' => 2,
                    'permission' => 'theme@admin_config',
                ],
                [
                    'route' => 'admin.nav.manager',
                    'text' => 'Navigation Manager',
                    'icon' => 'fa-list-ul',
                    'order' => 4,
                    'permission' => 'manage@admin_nav',
                    'activePattern' => '\/{backend}\/navigation\/*',
                ],
            ],
        ],
    ],
    'backend_config_menu' => [
        [
            'route' => 'admin.config.website',
            'text' => 'Website Configuration',
            'icon' => 'fa-wrench',
            'order' => 1,
            'permission' => 'website@admin_config',
        ],
        [
            'route' => 'admin.config.services',
            'text' => 'Services',
            'icon' => 'fa-key',
            'order' => 2,
            'permission' => 'services@admin_config',
        ],
        [
            'route' => 'admin.config.dashboard',
            'text' => 'Dashboard',
            'icon' => 'fa-puzzle-piece',
            'order' => 3,
            'permission' => 'manage@admin_dashboard',
        ],
        [
            'route' => 'admin.config.routes',
            'text' => 'Base Routes',
            'icon' => 'fa-sitemap',
            'order' => 4,
            'permission' => 'routes@admin_config',
        ],
        [
            'route' => 'admin.config.cache',
            'text' => 'Cache',
            'icon' => 'fa-recycle',
            'order' => 5,
            'permission' => 'cache@admin_config',
        ],
        [
            'route' => 'admin.config.debug',
            'text' => 'Debug / Maintenance',
            'icon' => 'fa-cogs',
            'order' => 6,
            'permission' => 'debug@admin_config',
        ],
    ],
];
