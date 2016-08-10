<?php
namespace Auction\V1\Rest\Auction;

class AuctionEntity
{
    public $auction_id;
    
    public $user_id;
    
    public $auction_start_unixtime;
    
    public $auction_end_unixtime;
    
    public $auction_min_bid_value;
    
    public $auction_current_bid_value;
    
    public $auction_num_bids;
    
    public $auction_heading;
    
    public $auction_subtitle;
    
    public $auction_featured_flag;
    
    public $auction_reserve_flag;
}
