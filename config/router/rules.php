<?php

return $rules = [
    '/' => [
        'action' => 'Main:action_index',
        'method' => 'get'
    ],

    '/user/[0-9]' => [
        'action' => 'Main:action_index',
        'method' => 'get'
    ],

    '/user/[0-9]/all' => [
        'action' => 'News:action_index',
        'method' => 'get'
    ],

    '/user/[0-9]/all/del' => [
        'action' => 'News:action_index',
        'method' => 'get'
    ],

    '/main/[0-9]/all/del' => [
        'action' => 'News:action_index',
        'method' => 'get'
    ],
];