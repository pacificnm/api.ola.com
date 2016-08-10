<?php
return array(
    'db' => array(
        'adapters' => array(
            'write' => array(),
            'read' => array(),
        ),
    ),
    'router' => array(
        'routes' => array(
            'oauth' => array(
                'options' => array(
                    'spec' => '%oauth%',
                    'regex' => '(?P<oauth>(/oauth))',
                ),
                'type' => 'regex',
            ),
        ),
    ),
    'zf-mvc-auth' => array(
        'authentication' => array(
            'map' => array(
                'Auction\\V1' => 'olaauth',
                'Category\\V1' => 'olaauth',
            ),
        ),
    ),
);
