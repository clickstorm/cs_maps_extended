<?php

$EM_CONF[$_EXTKEY] = [
    'title' => '[clickstorm] Google Maps Extended',
    'description' => 'Just an example extension. Based on go_maps_ext and news some extended functionality.',
    'category' => 'example',
    'version' => '0.0.1-dev',
    'state' => 'alpha',
    'uploadfolder' => 1,
    'clearCacheOnLoad' => 1,
    'author' => 'Marc Hirdes',
    'author_email' => 'marc_hirdes@gmx.de',
    'author_company' => 'clickstorm GmbH',
    'constraints' => [
        'depends' => [
            'typo3' => '10.0.0-10.4.99',
            'go_maps_ext' => '',
            'news' => '',
        ],
        'conflicts' => [],
        'suggests' => [],
    ]
];
