<?php
namespace Auction\V1\Rest\Auction;

use Application\Service\ServiceInterface;
use Application\Service\Service;

class AuctionService extends Service implements ServiceInterface
{
  
    /**
     * 
     * @param AuctionMapper $mapper
     */
    public function __construct(AuctionMapper $mapper)
    {
        $this->mapper = $mapper;
    }
}

