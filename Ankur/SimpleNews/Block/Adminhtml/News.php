<?php
namespace Ankur\SimpleNews\Block\Adminhtml;

use Magento\Backend\Block\Widget\Grid\Container;

class News extends Container {
    protected function _construct() {
        $this->_controller = 'adminhtml_news'; 
        $this->_blockGroup = 'Ankur_SimpleNews'; 
        $this->_headerText = __('Manage News');
        $this->_addButtonLabel = __('Add News');
        parent::_construct();
    }
}