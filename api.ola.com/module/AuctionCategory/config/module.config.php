<?php
return array(
    'service_manager' => array(
        'factories' => array(
            'AuctionCategory\\V1\\Rest\\AuctionCategory\\AuctionCategoryResource' => 'AuctionCategory\\V1\\Rest\\AuctionCategory\\AuctionCategoryResourceFactory',
        ),
    ),
    'router' => array(
        'routes' => array(
            'auction-category.rest.auction-category' => array(
                'type' => 'Segment',
                'options' => array(
                    'route' => '/auction-category[/:auction_category_id]',
                    'defaults' => array(
                        'controller' => 'AuctionCategory\\V1\\Rest\\AuctionCategory\\Controller',
                    ),
                ),
            ),
        ),
    ),
    'zf-versioning' => array(
        'uri' => array(
            0 => 'auction-category.rest.auction-category',
        ),
    ),
    'zf-rest' => array(
        'AuctionCategory\\V1\\Rest\\AuctionCategory\\Controller' => array(
            'listener' => 'AuctionCategory\\V1\\Rest\\AuctionCategory\\AuctionCategoryResource',
            'route_name' => 'auction-category.rest.auction-category',
            'route_identifier_name' => 'auction_category_id',
            'collection_name' => 'auction_category',
            'entity_http_methods' => array(
                0 => 'GET',
                1 => 'PATCH',
                2 => 'PUT',
                3 => 'DELETE',
            ),
            'collection_http_methods' => array(
                0 => 'GET',
                1 => 'POST',
            ),
            'collection_query_whitelist' => array(
                0 => 'auction',
                1 => 'category',
            ),
            'page_size' => 25,
            'page_size_param' => null,
            'entity_class' => 'AuctionCategory\\V1\\Rest\\AuctionCategory\\AuctionCategoryEntity',
            'collection_class' => 'AuctionCategory\\V1\\Rest\\AuctionCategory\\AuctionCategoryCollection',
            'service_name' => 'auctionCategory',
        ),
    ),
    'zf-content-negotiation' => array(
        'controllers' => array(
            'AuctionCategory\\V1\\Rest\\AuctionCategory\\Controller' => 'HalJson',
        ),
        'accept_whitelist' => array(
            'AuctionCategory\\V1\\Rest\\AuctionCategory\\Controller' => array(
                0 => 'application/vnd.auction-category.v1+json',
                1 => 'application/hal+json',
                2 => 'application/json',
            ),
        ),
        'content_type_whitelist' => array(
            'AuctionCategory\\V1\\Rest\\AuctionCategory\\Controller' => array(
                0 => 'application/vnd.auction-category.v1+json',
                1 => 'application/json',
            ),
        ),
    ),
    'zf-hal' => array(
        'metadata_map' => array(
            'AuctionCategory\\V1\\Rest\\AuctionCategory\\AuctionCategoryEntity' => array(
                'entity_identifier_name' => 'category_id',
                'route_name' => 'auction-category.rest.auction-category',
                'route_identifier_name' => 'auction_category_id',
                'hydrator' => 'Zend\\Stdlib\\Hydrator\\ArraySerializable',
            ),
            'AuctionCategory\\V1\\Rest\\AuctionCategory\\AuctionCategoryCollection' => array(
                'entity_identifier_name' => 'category_id',
                'route_name' => 'auction-category.rest.auction-category',
                'route_identifier_name' => 'auction_category_id',
                'is_collection' => true,
            ),
        ),
    ),
    'zf-content-validation' => array(
        'AuctionCategory\\V1\\Rest\\AuctionCategory\\Controller' => array(
            'input_filter' => 'AuctionCategory\\V1\\Rest\\AuctionCategory\\Validator',
        ),
    ),
    'input_filter_specs' => array(
        'AuctionCategory\\V1\\Rest\\AuctionCategory\\Validator' => array(
            0 => array(
                'required' => true,
                'validators' => array(),
                'filters' => array(),
                'name' => 'category_id',
            ),
            1 => array(
                'required' => true,
                'validators' => array(),
                'filters' => array(),
                'name' => 'auction_id',
            ),
        ),
    ),
    'zf-mvc-auth' => array(
        'authorization' => array(
            'AuctionCategory\\V1\\Rest\\AuctionCategory\\Controller' => array(
                'collection' => array(
                    'GET' => false,
                    'POST' => true,
                    'PUT' => false,
                    'PATCH' => false,
                    'DELETE' => false,
                ),
                'entity' => array(
                    'GET' => false,
                    'POST' => false,
                    'PUT' => true,
                    'PATCH' => true,
                    'DELETE' => true,
                ),
            ),
        ),
    ),
);
