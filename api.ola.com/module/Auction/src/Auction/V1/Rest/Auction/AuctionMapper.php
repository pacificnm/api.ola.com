<?php
namespace Auction\V1\Rest\Auction;

use Zend\Db\Adapter\AdapterInterface;
use Zend\Stdlib\Hydrator\HydratorInterface;
use Zend\Db\Sql\Expression;
use Application\Mapper\MapperInterface;
use Application\Mapper\Mapper;

class AuctionMapper extends Mapper implements MapperInterface
{
    
    /**
     * 
     * @param AdapterInterface $readAdapter
     * @param AdapterInterface $writeAdapter
     * @param HydratorInterface $hydrator
     * @param AuctionEntity $prototype
     */
    public function __construct(AdapterInterface $readAdapter, AdapterInterface $writeAdapter, HydratorInterface $hydrator, AuctionEntity $prototype)
    {
        $this->hydrator = $hydrator;
    
        $this->prototype = $prototype;
    
        $this->tableName = 'auction';
    
        parent::__construct($readAdapter, $writeAdapter);
    }

    /**
     * 
     * {@inheritDoc}
     * @see \Application\Mapper\MapperInterface::getAll()
     */
    public function getAll($filter)
    {
        $this->select = $this->readSql->select($this->tableName);
        
        $this->getColumns()
        ->joinPicture()
        ->joinUser()
        ->joinService()
        ->joinFeedback();
        
        $this->filterAuction($filter);
        
        $this->sortAuction($filter);
        
        $this->select->group('auction.auction_id');
        
        return $this->getPaginator();
    }

    /**
     * 
     * {@inheritDoc}
     * @see \Application\Mapper\MapperInterface::get()
     */
    public function get($id)
    {
        $this->select = $this->readSql->select($this->tableName);
        
        $this->joinPicture()
        ->joinUser()
        ->joinService()
        ->joinFeedback();
        
        $this->select->where(array(
            'auction.auction_id' => $id
        ));
        
        return $this->getRow();
    }

    /**
     * 
     * {@inheritDoc}
     * @see \Application\Mapper\MapperInterface::save()
     */
    public function save($model)
    {}

    /**
     * 
     * {@inheritDoc}
     * @see \Application\Mapper\MapperInterface::delete()
     */
    public function delete($model)
    {}
    
    /**
     * 
     * @param array $filter
     */
    protected function sortAuction($filter)
    {
        switch ($filter['sort']) {
            case 'ending-first':
                $this->select->order('auction.auction_end_unixtime ASC');
                break;
            case 'ending-last':
                $this->select->order('auction.auction_end_unixtime DESC');
                break;
            case 'price-lowest-first':
                $this->select->order('auction.auction_current_bid_value ASC');
                break;
            case 'price-highest-first':
                $this->select->order('auction.auction_current_bid_value DESC');
                break;
            case 'bids-lowest-first':
                $this->select->order('auction.auction_num_bids ASC');
                break;
            case 'bids-highest-first':
                $this->select->order('auction.auction_num_bids DESC');
                break;
            case 'auction-format-ascending':
                $this->select->order('auction.auction_type ASC');
                break;
            case 'auction-format-descending':
                $this->select->order('auction.auction_type DESC');
                break;
            case 'title-descending':
                $this->select->order('auction.auction_heading ASC');
                break;
            case 'title-ascending':
                $this->select->order('auction.auction_heading DESC');
                break;
        }
    
        $this;
    }
    
    /**
     * 
     * @param array $filter
     * @return \Auction\V1\Rest\Auction\AuctionMapper
     */
    protected function filterAuction($filter)
    {
        // auctionNumBids
        if (array_key_exists('bids', $filter)) {
            $this->select->where->greaterThan('auction_num_bids', 0);
        }
    
        // auctionItemQtyLeft
        if (array_key_exists('qauntity', $filter)) {
            $this->select->where->greaterThan('auction_item_qty_left', 0);
        }
    
        // keyword
        if (array_key_exists('keyword', $filter) && ! empty($filter['keyword'])) {
            if (is_numeric($filter['keyword'])) {
                $this->select->where(array(
                    'auction.auction_id' => $filter['keyword']
                ));
            } else {
                $this->select->where->like('auction.auction_heading', '%'.  $filter['keyword']. '%');
            }
        }
    
        // auctionId
        if (array_key_exists('auction', $filter) && ! empty($filter['auction'])) {
            $this->select->where(array(
                'auction.auction_id' => $filter['auction']
            ));
        }
    
        // userId
        if (array_key_exists('user', $filter) && ! empty($filter['user'])) {
            $this->select->where(array(
                'auction.user_id' => $filter['user']
            ));
        }
    
        // auctionStatus
        if (array_key_exists('status', $filter) && ! empty($filter['status'])) {
            $this->select->where(array(
                'auction.auction_status' => $filter['status']
            ));
        }
    
        // auction type
        if (array_key_exists('type', $filter) && ! empty($filter['type'])) {
            $this->select->where(array(
                'auction.auction_type' => $filter['type']
            ));
        }
    
        // featured
        if (array_key_exists('featured', $filter) && ! empty($filter['featured'])) {
            $this->select->where(array(
                'auction.auction_featured_flag' => 1
            ));
        }
    
        return $this;
    }
    
   /**
    * 
    * @param number $userId
    * @return \Auction\V1\Rest\Auction\AuctionMapper
    */
    protected function whereUser($userId)
    {
        $this->select->where(array(
            'auction.user_id = ?' => $userId
        ));
    
        return $this;
    }
    
    /**
     * 
     * @return \Auction\V1\Rest\Auction\AuctionMapper
     */
    protected function joinPicture()
    {
        // join image
        $expression = new Expression('picture.auction_id = auction.auction_id AND picture.picture_delete_flag = 0 AND picture.picture_order = 1');
        $this->select->join('picture', $expression, array(
            'picture_id',
            'picture_url'
        ), 'left');
    
        return $this;
    }
    
    /**
     * 
     * @return \Auction\V1\Rest\Auction\AuctionMapper
     */
    protected function joinUser()
    {
        // join user
        $this->select->join('ola_user', 'auction.user_id = ola_user.user_id', array(
            'user_username'
        ), 'inner');
    
        return $this;
    }
    
    /**
     * 
     * @return \Auction\V1\Rest\Auction\AuctionMapper
     */
    protected function joinFeedback()
    {
        // join users feedback
        $this->select->join('user_feedback_cache', 'ola_user.user_id = user_feedback_cache.user_id', array(
            'user_feedback_rating'
        ), 'left');
    
        return $this;
    }
    
    /**
     * 
     * @return \Auction\V1\Rest\Auction\AuctionMapper
     */
    protected function joinService()
    {
        return $this;
    }
    
    /**
     * 
     * @return \Auction\V1\Rest\Auction\AuctionMapper
     */
    protected function getColumns()
    {
        $this->select->columns(array(
            'auction_id',
            'user_id',
            'auction_start_unixtime',
            'auction_end_unixtime',
            'auction_heading',
            'auction_subtitle',
            'auction_featured_flag',
            'auction_reserve_flag',
            'auction_reserve_value',
            'auction_min_bid_value',
            'auction_current_bid_value',
            'auction_num_bids',
            'auction_type',
            'auction_item_qty',
            'auction_item_qty_left',
            'auction_status',
            'auction_view_count',
            'auction_relist_count',
            'auction_auto_relist_flag'
        ));
    
        return $this;
    }
}

