<?php

$config = [
    'DB_HOST' => '127.0.0.1',
    'DB_NAME' => '',
    'DB_USER' => '',
    'DB_PASSWORD' => '',
    'BASE_URL' => '/myband/public',
    'ROOT' => dirname(dirname(__DIR__)),
    'PRIVATE' => dirname(__DIR__),
    'WEBROOT' => dirname(dirname(__DIR__)) . '/public'
];

return $config;
