<?php
namespace Auction\V1\Rest\Auction;

use Zend\ServiceManager\ServiceLocatorInterface;
use Zend\Stdlib\Hydrator\ObjectProperty;

class AuctionMapperFactory
{
    /**
     * 
     * @param ServiceLocatorInterface $services
     * @return \Auction\V1\Rest\Auction\AuctionMapper
     */
    public function __invoke(ServiceLocatorInterface $services)
    {
        $readAdapter = $services->get('read');
        
        $writeAdapter = $services->get('write');
        
        $hydrator = new ObjectProperty();
        
        $prototype = new AuctionEntity();
        
        return new AuctionMapper($readAdapter, $writeAdapter, $hydrator, $prototype);
    }
}

