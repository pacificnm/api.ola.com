<?php
namespace Auction\V1\Rest\Auction;

use Zend\ServiceManager\ServiceLocatorInterface;

class AuctionResourceFactory
{
    /**
     * 
     * @param ServiceLocatorInterface $services
     * @return \Auction\V1\Rest\Auction\AuctionResource
     */
    public function __invoke(ServiceLocatorInterface $services)
    {
        $service = $services->get('Auction\V1\Rest\Auction\AuctionService');
        
        return new AuctionResource($service);
    }
}
