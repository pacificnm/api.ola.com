<?php
namespace Application\Mapper;

interface MapperInterface
{
    public function getAll($filter);
    
    public function get($id);
    
    public function save($model);
    
    public function delete($model);
}

