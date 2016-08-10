<?php
return array(
    'Category\\V1\\Rest\\Category\\Controller' => array(
        'collection' => array(
            'GET' => array(
                'response' => '{
   "_links": {
       "self": {
           "href": "/category"
       },
       "first": {
           "href": "/category?page={page}"
       },
       "prev": {
           "href": "/category?page={page}"
       },
       "next": {
           "href": "/category?page={page}"
       },
       "last": {
           "href": "/category?page={page}"
       }
   }
   "_embedded": {
       "category": [
           {
               "_links": {
                   "self": {
                       "href": "/category[/:category_id]"
                   }
               }
              "category_id": "",
              "category_name": "",
              "category_slug": "",
              "category_parent_id": "",
              "category_root_id": "",
              "category_type": "",
              "category_level": "",
              "category_require_verified_flag": "",
              "category_active": "",
              "category_featured": "",
              "category_description": "",
              "category_keywords": "",
              "category_title": "",
              "category_text": ""
           }
       ]
   }
}',
            ),
            'POST' => array(
                'request' => '{
   "category_id": "",
   "category_name": "",
   "category_slug": "",
   "category_parent_id": "",
   "category_root_id": "",
   "category_type": "",
   "category_level": "",
   "category_require_verified_flag": "",
   "category_active": "",
   "category_featured": "",
   "category_description": "",
   "category_keywords": "",
   "category_title": "",
   "category_text": ""
}',
                'response' => '{
   "_links": {
       "self": {
           "href": "/category[/:category_id]"
       }
   }
   "category_id": "",
   "category_name": "",
   "category_slug": "",
   "category_parent_id": "",
   "category_root_id": "",
   "category_type": "",
   "category_level": "",
   "category_require_verified_flag": "",
   "category_active": "",
   "category_featured": "",
   "category_description": "",
   "category_keywords": "",
   "category_title": "",
   "category_text": ""
}',
            ),
        ),
        'entity' => array(
            'GET' => array(
                'response' => '{
   "_links": {
       "self": {
           "href": "/category[/:category_id]"
       }
   }
   "category_id": "",
   "category_name": "",
   "category_slug": "",
   "category_parent_id": "",
   "category_root_id": "",
   "category_type": "",
   "category_level": "",
   "category_require_verified_flag": "",
   "category_active": "",
   "category_featured": "",
   "category_description": "",
   "category_keywords": "",
   "category_title": "",
   "category_text": ""
}',
            ),
            'PATCH' => array(
                'request' => '{
   "category_id": "",
   "category_name": "",
   "category_slug": "",
   "category_parent_id": "",
   "category_root_id": "",
   "category_type": "",
   "category_level": "",
   "category_require_verified_flag": "",
   "category_active": "",
   "category_featured": "",
   "category_description": "",
   "category_keywords": "",
   "category_title": "",
   "category_text": ""
}',
                'response' => '{
   "_links": {
       "self": {
           "href": "/category[/:category_id]"
       }
   }
   "category_id": "",
   "category_name": "",
   "category_slug": "",
   "category_parent_id": "",
   "category_root_id": "",
   "category_type": "",
   "category_level": "",
   "category_require_verified_flag": "",
   "category_active": "",
   "category_featured": "",
   "category_description": "",
   "category_keywords": "",
   "category_title": "",
   "category_text": ""
}',
            ),
            'PUT' => array(
                'request' => '{
   "category_id": "",
   "category_name": "",
   "category_slug": "",
   "category_parent_id": "",
   "category_root_id": "",
   "category_type": "",
   "category_level": "",
   "category_require_verified_flag": "",
   "category_active": "",
   "category_featured": "",
   "category_description": "",
   "category_keywords": "",
   "category_title": "",
   "category_text": ""
}',
                'response' => '{
   "_links": {
       "self": {
           "href": "/category[/:category_id]"
       }
   }
   "category_id": "",
   "category_name": "",
   "category_slug": "",
   "category_parent_id": "",
   "category_root_id": "",
   "category_type": "",
   "category_level": "",
   "category_require_verified_flag": "",
   "category_active": "",
   "category_featured": "",
   "category_description": "",
   "category_keywords": "",
   "category_title": "",
   "category_text": ""
}',
            ),
            'DELETE' => array(
                'request' => '{
   "category_id": "",
   "category_name": "",
   "category_slug": "",
   "category_parent_id": "",
   "category_root_id": "",
   "category_type": "",
   "category_level": "",
   "category_require_verified_flag": "",
   "category_active": "",
   "category_featured": "",
   "category_description": "",
   "category_keywords": "",
   "category_title": "",
   "category_text": ""
}',
                'response' => '{
   "_links": {
       "self": {
           "href": "/category[/:category_id]"
       }
   }
   "category_id": "",
   "category_name": "",
   "category_slug": "",
   "category_parent_id": "",
   "category_root_id": "",
   "category_type": "",
   "category_level": "",
   "category_require_verified_flag": "",
   "category_active": "",
   "category_featured": "",
   "category_description": "",
   "category_keywords": "",
   "category_title": "",
   "category_text": ""
}',
            ),
        ),
    ),
);
