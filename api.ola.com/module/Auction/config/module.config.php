<?php
return array(
    'service_manager' => array(
        'factories' => array(
            'Auction\\V1\\Rest\\Auction\\AuctionResource' => 'Auction\\V1\\Rest\\Auction\\AuctionResourceFactory',
            'Auction\\V1\\Rest\\Auction\\AuctionMapper' => 'Auction\\V1\\Rest\\Auction\\AuctionMapperFactory',
            'Auction\\V1\\Rest\\Auction\\AuctionService' => 'Auction\\V1\\Rest\\Auction\\AuctionServiceFactory',
        ),
    ),
    'router' => array(
        'routes' => array(
            'auction.rest.auction' => array(
                'type' => 'Segment',
                'options' => array(
                    'route' => '/auction[/:auction_id]',
                    'defaults' => array(
                        'controller' => 'Auction\\V1\\Rest\\Auction\\Controller',
                    ),
                ),
            ),
        ),
    ),
    'zf-versioning' => array(
        'uri' => array(
            0 => 'auction.rest.auction',
        ),
    ),
    'zf-rest' => array(
        'Auction\\V1\\Rest\\Auction\\Controller' => array(
            'listener' => 'Auction\\V1\\Rest\\Auction\\AuctionResource',
            'route_name' => 'auction.rest.auction',
            'route_identifier_name' => 'auction_id',
            'collection_name' => 'auction',
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
                0 => 'status',
                1 => 'type',
                2 => 'featured',
                3 => 'user',
                4 => 'start',
                5 => 'end',
                6 => 'bids',
                7 => 'views',
                8 => 'sort',
            ),
            'page_size' => 25,
            'page_size_param' => null,
            'entity_class' => 'Auction\\V1\\Rest\\Auction\\AuctionEntity',
            'collection_class' => 'Auction\\V1\\Rest\\Auction\\AuctionCollection',
            'service_name' => 'auction',
        ),
    ),
    'zf-content-negotiation' => array(
        'controllers' => array(
            'Auction\\V1\\Rest\\Auction\\Controller' => 'HalJson',
        ),
        'accept_whitelist' => array(
            'Auction\\V1\\Rest\\Auction\\Controller' => array(
                0 => 'application/vnd.auction.v1+json',
                1 => 'application/hal+json',
                2 => 'application/json',
            ),
        ),
        'content_type_whitelist' => array(
            'Auction\\V1\\Rest\\Auction\\Controller' => array(
                0 => 'application/vnd.auction.v1+json',
                1 => 'application/json',
            ),
        ),
    ),
    'zf-hal' => array(
        'metadata_map' => array(
            'Auction\\V1\\Rest\\Auction\\AuctionEntity' => array(
                'entity_identifier_name' => 'auction_id',
                'route_name' => 'auction.rest.auction',
                'route_identifier_name' => 'auction_id',
                'hydrator' => 'Zend\\Stdlib\\Hydrator\\ObjectProperty',
            ),
            'Auction\\V1\\Rest\\Auction\\AuctionCollection' => array(
                'entity_identifier_name' => 'auction_id',
                'route_name' => 'auction.rest.auction',
                'route_identifier_name' => 'auction_id',
                'is_collection' => true,
            ),
        ),
    ),
    'zf-content-validation' => array(
        'Auction\\V1\\Rest\\Auction\\Controller' => array(
            'input_filter' => 'Auction\\V1\\Rest\\Auction\\Validator',
        ),
    ),
    'input_filter_specs' => array(
        'Auction\\V1\\Rest\\Auction\\Validator' => array(
            0 => array(
                'required' => true,
                'validators' => array(),
                'filters' => array(),
                'name' => 'auction_id',
            ),
            1 => array(
                'required' => true,
                'validators' => array(),
                'filters' => array(),
                'name' => 'user_id',
            ),
            2 => array(
                'required' => true,
                'validators' => array(),
                'filters' => array(),
                'name' => 'auction_start_unixtime',
            ),
            3 => array(
                'required' => true,
                'validators' => array(),
                'filters' => array(),
                'name' => 'auction_end_unixtime',
            ),
            4 => array(
                'required' => true,
                'validators' => array(),
                'filters' => array(),
                'name' => 'auction_min_bid_value',
            ),
            5 => array(
                'required' => true,
                'validators' => array(),
                'filters' => array(),
                'name' => 'auction_current_bid_value',
            ),
            6 => array(
                'required' => true,
                'validators' => array(),
                'filters' => array(),
                'name' => 'auction_num_bids',
            ),
            7 => array(
                'required' => true,
                'validators' => array(),
                'filters' => array(),
                'name' => 'auction_heading',
            ),
            8 => array(
                'required' => true,
                'validators' => array(),
                'filters' => array(),
                'name' => 'auction_subtitle',
            ),
            9 => array(
                'required' => true,
                'validators' => array(),
                'filters' => array(),
                'name' => 'auction_featured_flag',
            ),
            10 => array(
                'required' => true,
                'validators' => array(),
                'filters' => array(),
                'name' => 'auction_reserve_flag',
            ),
            11 => array(
                'required' => true,
                'validators' => array(),
                'filters' => array(),
                'name' => 'auction_reserve_value',
            ),
            12 => array(
                'required' => true,
                'validators' => array(),
                'filters' => array(),
                'name' => 'auction_discount',
            ),
            13 => array(
                'required' => true,
                'validators' => array(),
                'filters' => array(),
                'name' => 'auction_item_qty',
            ),
            14 => array(
                'required' => true,
                'validators' => array(),
                'filters' => array(),
                'name' => 'auction_item_qty_left',
            ),
            15 => array(
                'required' => true,
                'validators' => array(),
                'filters' => array(),
                'name' => 'auction_secure_flag',
            ),
            16 => array(
                'required' => true,
                'validators' => array(),
                'filters' => array(),
                'name' => 'auction_auto_relist_flag',
            ),
            17 => array(
                'required' => true,
                'validators' => array(),
                'filters' => array(),
                'name' => 'auction_end_early_flag',
            ),
            18 => array(
                'required' => true,
                'validators' => array(),
                'filters' => array(),
                'name' => 'auction_end_early_value',
            ),
            19 => array(
                'required' => true,
                'validators' => array(),
                'filters' => array(),
                'name' => 'auction_status',
            ),
            20 => array(
                'required' => true,
                'validators' => array(),
                'filters' => array(),
                'name' => 'auction_desc_memo',
            ),
            21 => array(
                'required' => true,
                'validators' => array(),
                'filters' => array(),
                'name' => 'auction_shipping_memo',
            ),
            22 => array(
                'required' => true,
                'validators' => array(),
                'filters' => array(),
                'name' => 'auction_type',
            ),
            23 => array(
                'required' => true,
                'validators' => array(),
                'filters' => array(),
                'name' => 'auction_location_zip_code',
            ),
            24 => array(
                'required' => true,
                'validators' => array(),
                'filters' => array(),
                'name' => 'auction_location_city',
            ),
            25 => array(
                'required' => true,
                'validators' => array(),
                'filters' => array(),
                'name' => 'auction_location_state',
            ),
            26 => array(
                'required' => true,
                'validators' => array(),
                'filters' => array(),
                'name' => 'auction_offsite_flag',
            ),
            27 => array(
                'required' => true,
                'validators' => array(),
                'filters' => array(),
                'name' => 'auction_user_hidden_flag',
            ),
            28 => array(
                'required' => true,
                'validators' => array(),
                'filters' => array(),
                'name' => 'auction_relist_count',
            ),
            29 => array(
                'required' => true,
                'validators' => array(),
                'filters' => array(),
                'name' => 'auction_view_count',
            ),
            30 => array(
                'required' => true,
                'validators' => array(),
                'filters' => array(),
                'name' => 'auction_days',
            ),
            31 => array(
                'required' => true,
                'validators' => array(),
                'filters' => array(),
                'name' => 'dirty_flag',
            ),
            32 => array(
                'required' => true,
                'validators' => array(),
                'filters' => array(),
                'name' => 'last_modified',
            ),
            33 => array(
                'required' => true,
                'validators' => array(),
                'filters' => array(),
                'name' => 'auction_hours',
            ),
            34 => array(
                'required' => true,
                'validators' => array(),
                'filters' => array(),
                'name' => 'auction_source',
            ),
            35 => array(
                'required' => true,
                'validators' => array(),
                'filters' => array(),
                'name' => 'auction_priority',
            ),
            36 => array(
                'required' => true,
                'validators' => array(),
                'filters' => array(),
                'name' => 'last_modified_by',
            ),
            37 => array(
                'required' => true,
                'validators' => array(),
                'filters' => array(),
                'name' => 'creator_id',
            ),
        ),
    ),
    'zf-mvc-auth' => array(
        'authorization' => array(
            'Auction\\V1\\Rest\\Auction\\Controller' => array(
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
