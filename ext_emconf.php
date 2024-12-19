<?php

$EM_CONF[$_EXTKEY] = [
    'title' => 'selecttree',
    'description' => 'Backport optimizations for selectTree TCA renderType to TYPO3 versions < v13',
    'category' => 'module',
    'author' => 'Sybille Peters',
    'author_email' => 'sypets@gmx.de',
    'author_company' => '',
    'state' => 'stable',
    'uploadfolder' => 0,
    'createDirs' => '',
    'clearCacheOnLoad' => 0,
    'version' => '1.0.1-dev',
    'constraints' => [
        'depends' => [
            'typo3' => '12.4.24-12.9.99',
        ],
        'conflicts' => [],
        'suggests' => [],
    ],
];
