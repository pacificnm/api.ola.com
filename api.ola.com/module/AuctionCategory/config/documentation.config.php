<?php
return array(
    'AuctionCategory\\V1\\Rest\\AuctionCategory\\Controller' => array(
        'collection' => array(
            'GET' => array(
                'response' => '{
   "_links": {
       "self": {
           "href": "/auction-category"
       },
       "first": {
           "href": "/auction-category?page={page}"
       },
       "prev": {
           "href": "/auction-category?page={page}"
       },
       "next": {
           "href": "/auction-category?page={page}"
       },
       "last": {
           "href": "/auction-category?page={page}"
       }
   }
   "_embedded": {
       "auction_category": [
           {
               "_links": {
                   "self": {
                       "href": "/auction-category[/:auction_category_id]"
                   }
               }
              "category_id": "",
              "auction_id": ""
           }
       ]
   }
}',
            ),
            'POST' => array(
                'request' => '{
   "category_id": "",
   "auction_id": ""
}',
                'response' => '{
   "_links": {
       "self": {
           "href": "/auction-category[/:auction_category_id]"
       }
   }
   "category_id": "",
   "auction_id": ""
}',
            ),
        ),
        'entity' => array(
            'GET' => array(
                'response' => '{
   "_links": {
       "self": {
           "href": "/auction-category[/:auction_category_id]"
       }
   }
   "category_id": "",
   "auction_id": ""
}',
            ),
            'PATCH' => array(
                'request' => '{
   "category_id": "",
   "auction_id": ""
}',
                'response' => '{
   "_links": {
       "self": {
           "href": "/auction-category[/:auction_category_id]"
       }
   }
   "category_id": "",
   "auction_id": ""
}',
            ),
            'PUT' => array(
                'request' => '{
   "category_id": "",
   "auction_id": ""
}',
                'response' => '{
   "_links": {
       "self": {
           "href": "/auction-category[/:auction_category_id]"
       }
   }
   "category_id": "",
   "auction_id": ""
}',
            ),
            'DELETE' => array(
                'request' => '{
   "category_id": "",
   "auction_id": ""
}',
                'response' => '{
   "_links": {
       "self": {
           "href": "/auction-category[/:auction_category_id]"
       }
   }
   "category_id": "",
   "auction_id": ""
}',
            ),
        ),
    ),
);
