<?php

return [

    '' => [
        'controller' => 'test',
        'action' => 'test',
    ],

    'test/test' => [
        'controller' => 'test',
        'action' => 'test',
    ],

    'new/new' => [
        'controller' => 'new',
        'action' => 'new',
    ],

    'division/showall' => [
        'controller' => 'division',
        'action' => 'showall',
    ],

    'division/show/([0-9]+)' => [
        'controller' => 'division',
        'action' => 'show',
        'id' => '$1',
    ],

];