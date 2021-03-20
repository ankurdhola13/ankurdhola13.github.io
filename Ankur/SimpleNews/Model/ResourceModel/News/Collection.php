<?php
namespace Ankur\SimpleNews\Model\ResourceModel\News;

use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;

class Collection extends AbstractCollection {
    protected function _construct() {
        $this->_init('Ankur\SimpleNews\Model\News', 'Ankur\SimpleNews\Model\ResourceModel\News');
    }
}