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

    'division/createdivision' => [
        'controller' => 'division',
        'action' => 'createdivision',
    ],

    'division/updatedivision/([0-9]+)' => [
        'controller' => 'division',
        'action' => 'updatedivision',
        'id' => '$1',
    ],

    'division/deleteDivision/([0-9]+)' => [
        'controller' => 'division',
        'action' => 'deleteDivision',
        'id' => '$1',
    ],

    'division/show/([0-9]+)' => [
        'controller' => 'division',
        'action' => 'show',
        'id' => '$1',
    ],

    'employee/showall' => [
        'controller' => 'employee',
        'action' => 'showall',
    ],

    'employee/createemployee' => [
        'controller' => 'employee',
        'action' => 'createemployee',
    ],

    'employee/updateemployee/([0-9]+)' => [
        'controller' => 'employee',
        'action' => 'updateemployee',
        'id' => '$1',
    ],

    'employee/deleteemployee/([0-9]+)' => [
        'controller' => 'employee',
        'action' => 'deleteemployee',
        'id' => '$1',
    ],

    'employee/show/([0-9]+)' => [
        'controller' => 'employee',
        'action' => 'show',
        'id' => '$1',
    ],

];