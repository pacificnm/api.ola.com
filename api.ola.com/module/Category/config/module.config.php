<?php
return array(
    'service_manager' => array(
        'factories' => array(
            'Category\\V1\\Rest\\Category\\CategoryResource' => 'Category\\V1\\Rest\\Category\\CategoryResourceFactory',
        ),
    ),
    'router' => array(
        'routes' => array(
            'category.rest.category' => array(
                'type' => 'Segment',
                'options' => array(
                    'route' => '/category[/:category_id]',
                    'defaults' => array(
                        'controller' => 'Category\\V1\\Rest\\Category\\Controller',
                    ),
                ),
            ),
        ),
    ),
    'zf-versioning' => array(
        'uri' => array(
            0 => 'category.rest.category',
        ),
    ),
    'zf-rest' => array(
        'Category\\V1\\Rest\\Category\\Controller' => array(
            'listener' => 'Category\\V1\\Rest\\Category\\CategoryResource',
            'route_name' => 'category.rest.category',
            'route_identifier_name' => 'category_id',
            'collection_name' => 'category',
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
            'collection_query_whitelist' => array(),
            'page_size' => 25,
            'page_size_param' => null,
            'entity_class' => 'Category\\V1\\Rest\\Category\\CategoryEntity',
            'collection_class' => 'Category\\V1\\Rest\\Category\\CategoryCollection',
            'service_name' => 'category',
        ),
    ),
    'zf-content-negotiation' => array(
        'controllers' => array(
            'Category\\V1\\Rest\\Category\\Controller' => 'HalJson',
        ),
        'accept_whitelist' => array(
            'Category\\V1\\Rest\\Category\\Controller' => array(
                0 => 'application/vnd.category.v1+json',
                1 => 'application/hal+json',
                2 => 'application/json',
            ),
        ),
        'content_type_whitelist' => array(
            'Category\\V1\\Rest\\Category\\Controller' => array(
                0 => 'application/vnd.category.v1+json',
                1 => 'application/json',
            ),
        ),
    ),
    'zf-hal' => array(
        'metadata_map' => array(
            'Category\\V1\\Rest\\Category\\CategoryEntity' => array(
                'entity_identifier_name' => 'category_id',
                'route_name' => 'category.rest.category',
                'route_identifier_name' => 'category_id',
                'hydrator' => 'Zend\\Stdlib\\Hydrator\\ArraySerializable',
            ),
            'Category\\V1\\Rest\\Category\\CategoryCollection' => array(
                'entity_identifier_name' => 'category_id',
                'route_name' => 'category.rest.category',
                'route_identifier_name' => 'category_id',
                'is_collection' => true,
            ),
        ),
    ),
    'zf-content-validation' => array(
        'Category\\V1\\Rest\\Category\\Controller' => array(
            'input_filter' => 'Category\\V1\\Rest\\Category\\Validator',
        ),
    ),
    'input_filter_specs' => array(
        'Category\\V1\\Rest\\Category\\Validator' => array(
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
                'name' => 'category_name',
            ),
            2 => array(
                'required' => true,
                'validators' => array(),
                'filters' => array(),
                'name' => 'category_slug',
            ),
            3 => array(
                'required' => true,
                'validators' => array(),
                'filters' => array(),
                'name' => 'category_parent_id',
            ),
            4 => array(
                'required' => true,
                'validators' => array(),
                'filters' => array(),
                'name' => 'category_root_id',
            ),
            5 => array(
                'required' => true,
                'validators' => array(),
                'filters' => array(),
                'name' => 'category_type',
            ),
            6 => array(
                'required' => true,
                'validators' => array(),
                'filters' => array(),
                'name' => 'category_level',
            ),
            7 => array(
                'required' => true,
                'validators' => array(),
                'filters' => array(),
                'name' => 'category_require_verified_flag',
            ),
            8 => array(
                'required' => true,
                'validators' => array(),
                'filters' => array(),
                'name' => 'category_active',
            ),
            9 => array(
                'required' => true,
                'validators' => array(),
                'filters' => array(),
                'name' => 'category_featured',
            ),
            10 => array(
                'required' => true,
                'validators' => array(),
                'filters' => array(),
                'name' => 'category_description',
            ),
            11 => array(
                'required' => true,
                'validators' => array(),
                'filters' => array(),
                'name' => 'category_keywords',
            ),
            12 => array(
                'required' => true,
                'validators' => array(),
                'filters' => array(),
                'name' => 'category_title',
            ),
            13 => array(
                'required' => true,
                'validators' => array(),
                'filters' => array(),
                'name' => 'category_text',
            ),
        ),
    ),
    'zf-mvc-auth' => array(
        'authorization' => array(
            'Category\\V1\\Rest\\Category\\Controller' => array(
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
