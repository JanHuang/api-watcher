<?php
/**
 * @author: RunnerLee
 * @email: runnerleer@gmail.com
 * @time: 2017-08
 */


$path = __DIR__ . '/../storage/vbot/';

return [
    'path'     => $path,

    'swoole'  => [
        'status' => true,
        'ip'     => '127.0.0.1',
        'port'   => '9001',
    ],

    'download' => [
        'image'         => false,
        'voice'         => false,
        'video'         => false,
        'emoticon'      => false,
        'file'          => false,
        'emoticon_path' => $path . 'emoticons',
    ],

    'console' => [
        'output'  => true,
        'message' => true,
    ],

    'log'      => [
        'level'         => 'debug',
        'permission'    => 0777,
        'system'        => $path . 'log',
        'message'       => $path . 'log',
    ],

    'cache' => [
        'default' => 'redis',
        'stores'  => [
            'file' => [
                'driver' => 'file',
                'path'   => $path.'cache',
            ],
            'redis' => [
                'driver'     => 'redis',
                'connection' => 'default',
            ],
        ],
    ],

    'extension' => [
        'admin' => [
            'remark'   => '',
            'nickname' => '',
        ],
        'runner_demo' => [
        ],
    ],

    'database' => [
        'default' => 'mysql',
        'redis' => [
            'default' => [
                'host' => '127.0.0.1',
                'password' => null,
                'port' => 6379,
                'database' => 4,
            ],
        ],
        'connections' => [
            'mysql' => [
                'driver' => 'mysql',
                'host' => '127.0.0.1',
                'port' => '3306',
                'database' => 'api_watcher',
                'username' => 'root',
                'password' => '',
                'unix_socket' => '',
                'charset' => 'utf8',
                'collation' => 'utf8_unicode_ci',
                'prefix' => '',
                'strict' => true,
                'engine' => null,
            ],
        ],
    ],
];