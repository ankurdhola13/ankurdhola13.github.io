<?php
namespace Ankur\SimpleNews\Model;

use Magento\Framework\Model\AbstractModel;

class News extends AbstractModel {
    protected function _construct() {
        
        $this->_init('Ankur\SimpleNews\Model\ResourceModel\News');
    }
}