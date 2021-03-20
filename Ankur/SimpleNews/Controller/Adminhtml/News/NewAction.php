<?php
namespace Ankur\SimpleNews\Controller\Adminhtml\News;

use Ankur\SimpleNews\Controller\Adminhtml\News;

class NewAction extends News {
    public function execute() {
        $this->_forward('edit');
    }
}