<?php
namespace Auction\V1\Rest\Auction;

use Zend\ServiceManager\ServiceLocatorInterface;

class AuctionServiceFactory
{
    /**
     * 
     * @param ServiceLocatorInterface $services
     * @return \Auction\V1\Rest\Auction\AuctionService
     */
    public function __invoke(ServiceLocatorInterface $services)
    {
        $mapper = $services->get('Auction\V1\Rest\Auction\AuctionMapper');
        
        return new AuctionService($mapper);
    }
}

