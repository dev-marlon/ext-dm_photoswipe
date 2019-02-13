<?php
$EM_CONF[$_EXTKEY] = [
    'title' => 'PhotoSwipe gallery',
    'description' => 'A picture gallery using PhotoSwipe',
    'category' => 'plugin',
    'author' => 'Marlon Hänsdieke',
    'state' => 'stable',
    'clearCacheOnLoad' => true,
    'version' => '0.0.0',
    'constraints' => [
        'depends' => [
            'typo3' => '8.7.0-8.9.99',
        ],
    ],
    'autoload' => [
        'psr-4' => [
            'DM\\PhotoSwipe\\' => 'Classes'
        ],
    ],
];