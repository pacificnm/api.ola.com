<?php
namespace Application\Service;

interface ServiceInterface
{
    public function getAll($filter);
    
    public function get($id);
    
    public function save($model);
    
    public function delete($model);
}

