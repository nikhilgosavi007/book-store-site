<?php

/**
 * Extension Manager/Repository config file for ext "book_store_site".
 */
$EM_CONF[$_EXTKEY] = [
    'title' => 'Book Store Site',
    'description' => '',
    'category' => 'templates',
    'constraints' => [
        'depends' => [
            'typo3' => '8.7.0-9.5.99',
            'rte_ckeditor' => '8.7.0-9.5.99',
            'bootstrap_package' => '10.0.0-10.0.99'
        ],
        'conflicts' => [
        ],
    ],
    'autoload' => [
        'psr-4' => [
            'NikhilGosavi\\BookStoreSite\\' => 'Classes'
        ],
    ],
    'state' => 'stable',
    'uploadfolder' => 0,
    'createDirs' => '',
    'clearCacheOnLoad' => 1,
    'author' => 'Nikhil Gosavi',
    'author_email' => 'nikhil@gmail.com',
    'author_company' => 'Nikhil Gosavi',
    'version' => '1.0.0',
];
