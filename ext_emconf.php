<?php

/***************************************************************
 * Extension Manager/Repository config file for ext: "cachebuster"
 ***************************************************************/

$EM_CONF['cachebuster'] = [
    'title' => 'CacheBuster',
    'description' => 'Adds a cachebuster to files referenced via FAL and Fluids f:uri.resource Viewhelper',
    'category' => 'fe',
    'author' => 'Christoph Lehmann, Alexander Opitz',
    'author_email' => 'post@christophlehmann.eu, opitz@extrameile-gehen.de',
    'state' => 'beta',
    'clearCacheOnLoad' => 1,
    'version' => '0.2.0',
    'constraints' => [
        'depends' => [
            'typo3' => '9.5.0-10.4.99',
        ],
    ],
];
