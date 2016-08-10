<?php
namespace Application\Service;

class Service implements ServiceInterface
{

    protected $mapper;
    
    public function getAll($filter)
    {
        return $this->mapper->getAll($filter);
    }

    public function get($id)
    {
        return $this->mapper->get($id);
    }

    public function save($model)
    {
        return $this->mapper->save($model);
    }

    public function delete($model)
    {
        return $this->mapper->delete($model);
    }
}

