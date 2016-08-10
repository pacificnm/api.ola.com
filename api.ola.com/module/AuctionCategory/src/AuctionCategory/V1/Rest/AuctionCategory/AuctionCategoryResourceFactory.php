<?php
namespace AuctionCategory\V1\Rest\AuctionCategory;

class AuctionCategoryResourceFactory
{
    public function __invoke($services)
    {
        return new AuctionCategoryResource();
    }
}
