<?php
return [
    'cache_types' => [
        'compiled_config' => 1,
        'config' => 1,
        'layout' => 0,
        'block_html' => 0,
        'collections' => 1,
        'reflection' => 1,
        'db_ddl' => 1,
        'eav' => 1,
        'customer_notification' => 1,
        'config_integration' => 1,
        'config_integration_api' => 1,
        'full_page' => 0,
        'config_webservice' => 1,
        'translate' => 1
    ],
    'backend' => [
        'frontName' => 'admin'
    ],
    'cache' => [
        'graphql' => [
            'id_salt' => 'K0QaWDFMQs2ZmwG267Qs4xFSIPmfI0bT'
        ],
        'frontend' => [
            'default' => [
                'id_prefix' => '829_'
            ],
            'page_cache' => [
                'id_prefix' => '829_'
            ]
        ],
        'allow_parallel_generation' => false
    ],
    'remote_storage' => [
        'driver' => 'file'
    ],
    'queue' => [
        'consumers_wait_for_messages' => 1
    ],
    'crypt' => [
        'key' => '7a5e1afdd08c022b06ef1201c995063b'
    ],
    'db' => [
        'table_prefix' => '',
        'connection' => [
            'default' => [
                'host' => 'localhost',
                'dbname' => 'magento2',
                'username' => 'root',
                'password' => '1234',
                'model' => 'mysql4',
                'engine' => 'innodb',
                'initStatements' => 'SET NAMES utf8;',
                'active' => '1',
                'driver_options' => [
                    1014 => false
                ]
            ]
        ]
    ],
    'resource' => [
        'default_setup' => [
            'connection' => 'default'
        ]
    ],
    'x-frame-options' => 'fpcSAMEORIGIN',
    'MAGE_MODE' => 'developer',
    'session' => [
        'save' => 'files'
    ],
    'lock' => [
        'provider' => 'db'
    ],
    'directories' => [
        'document_root_is_pub' => true
    ],
    'downloadable_domains' => [
        'magento246.mgt'
    ],
    'install' => [
        'date' => 'Tue, 07 Nov 2023 08:40:55 +0000'
    ]
];
