<?php
$EM_CONF[$_EXTKEY] = [
    'title' => 'Armin\'s First Extension',
    'description' => 'An extension for using Fluid',
    'category' => 'plugin',
    'author' => 'Armin Saderi',
    'author_company' => 'Armin Inc.',
    'author_email' => 'arminsaderi@gmail.com',
    'state' => 'alpha',
    'version' => '1.0.0',
    'constraints' => [
        'depends' => [
            'typo3' => '10.4.0-10.4.99',
            'fluid_styled_content' => '10.4.0-10.4.99'
        ],
        'conflicts' => [
        ],
    ],
    'uploadfolder' => 0,
    'createDirs' => '', 
    'clearCacheOnLoad' => 1
];